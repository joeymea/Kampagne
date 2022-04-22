var quickCreatorModalID = '#entity-modal';
var quickCreatorSubmitBtn;

$(document).ready(function (e) {
    $(document).on('shown.bs.modal shown.bs.popover', function() {
        quickCreatorUI();
    });

    $('.quick-creator-subform').click(function () {
        $.ajax({
            url: $(this).data('url')
        }).done(function (data) {
            $(quickCreatorModalID).find('.modal-content').html(data);
            $(quickCreatorModalID).modal();

            quickCreatorSubformHandler();
        });
    });
});


/**
 * Quick Entity Creator UI
 */
function quickCreatorUI() {
    $('[data-toggle="entity-creator"]').unbind('click').click(function(e) {
        e.preventDefault();
        quickCreatorLoadingModal();

        $.ajax({
            url: $(this).data('url')
        }).done(function (data) {
            $(quickCreatorModalID).find('.modal-content').html(data);

            quickCreatorSubformHandler();
        });

        return false;
    });
}

function quickCreatorDuplicateName() {
    $('#entity-creator-form input[name="names[]"]').unbind('focusout').focusout(function(e) {
        // Don't bother if the user didn't set any value
        if (!$(this).val()) {
            return;
        }

        $(this).parent().parent().find('.duplicate-entity-warning').hide();
        // Check if an entity of the same type already exists, and warn when it does.
        $.ajax({
            'url': $(this).data('live') + '?q=' + $(this).val() + '&type=' + $(this).data('type'),
            context: this
        }).done(function (res) {
            if (res.length > 0) {
                let entities = Object.keys(res).map(function (k) { return '<a href="' + res[k].url + '">' + res[k].name + '</a>'}).join(', ');
                $(this).parent().parent().find('.duplicate-entities').html(entities);
                $(this).parent().parent().find('.duplicate-entity-warning').fadeIn();
            } else {
                $(this).parent().parent().find('.duplicate-entity-warning').hide();
            }
        });
    });
}

function quickCreatorLoadingModal() {
    $(quickCreatorModalID)
        .find('.modal-content')
        .html(
            '<div class="modal-body">' +
            '<div class="text-center">' +
            '<i class="fa fa-spinner fa-spin fa-2x"></i>' +
            '</div>' +
            '</div>'
        );
}

/**
 *
 */
function quickCreatorSubformHandler() {

    quickCreatorSubmitBtn = $('#quick-creator-submit-btn');

    window.initForeignSelect();
    window.initTags();
    quickCreatorDuplicateName();

    // Back button
    quickCreatorBackButton();
    quickCreatorExtraName();

    $('#entity-creator-form').submit(function(e) {

        e.preventDefault();
        quickCreatorSubmitBtn
            .prop('disabled', true)
            .html('<i class="fas fa-spinner fa-spin"></i>');

        // Allow ajax requests to use the X_CSRF_TOKEN for deletes
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.post({
            url: $(this).attr('action'),
            data: $(this).serialize(),
            context: this
        }).done(function (result, textStatus, xhr) {
            // New entity was created, let's follow that redirect
            if (typeof result === 'object') {
                $('#' + result._target).children().remove().end().append(
                    new Option(result._name, result._id)
                ).val(result._id).trigger('change');

                $(quickCreatorModalID).find('.modal-content').html('');
                $(quickCreatorModalID).modal('toggle');

                return;
            }

            $(quickCreatorModalID).find('.modal-content').html(result);
            quickCreatorUI();

        }).fail(function (err) {
            if (err.responseJSON.errors) {

                let errors = err.responseJSON.errors;

                let errorKeys = Object.keys(errors);
                let foundAllErrors = true;
                errorKeys.forEach(function (i) {
                    let name = i;
                    if (name === 'name') {
                        name = 'names[]';
                    }
                    var errorSelector = $('#entity-creator-form input[name="' + name + '"]');
                    if (errorSelector.length > 0) {
                        errorSelector.addClass('input-error').parent().parent().append('<div class="text-danger">' + errors[i][0] + '</div>');
                    } else {
                        foundAllErrors = false;
                    }
                });

                let firstItem = Object.keys(errors)[0];
                let firstItemDom = $('#entity-creator-form input[name="' + firstItem + '"]');

                // If we can actually find the first element, switch to it and the correct tab.
                if (firstItemDom[0]) {
                    firstItemDom[0].scrollIntoView({behavior: 'smooth'});

                    // Switch tabs/pane
                    $('.tab-content .active').removeClass('active');
                    $('.nav-tabs li.active').removeClass('active');
                    var firstPane = $('[name="' + firstItem + '"').closest('.tab-pane');
                    firstPane.addClass('active');
                    $('a[href="#' + firstPane.attr('id') + '"]').closest('li').addClass('active');
                }
            }
            quickCreatorSubmitBtn
                .prop('disabled', false)
                .html(quickCreatorSubmitBtn.data('text'));
        });
    });
}

function quickCreatorBackButton() {
    $('#entity-creator-back').click(function(e) {
        e.preventDefault();
        quickCreatorLoadingModal();

        $.ajax({
            url: $(this).data('url'),
            context: this
        }).done(function (result) {
            let target = $(this).data('target');
            $(target).find('.modal-content').html(result);
            quickCreatorUI();
        });
    });
}

function quickCreatorExtraName() {

    $('.btn-extra-name').click(function (e) {
        e.preventDefault();

        let block = $('.name-block-template').clone().removeClass('name-block-template');
        let html = block.html().replace('toggle-tooltip', 'tooltip');

        $('.extra-name-fields').append(block.html(html));

        quickCreatorNameHandler();
        quickCreatorDuplicateName();
    });
}

/**
 * Removing a name
 */
function quickCreatorNameHandler() {
    $('[data-toggle="tooltip"]').tooltip();

    $('.btn-extra-name-remove').unbind('click').click(function (e) {
        e.preventDefault;

        $(this).parent().parent().parent().remove();
    });
}
