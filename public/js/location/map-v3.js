!function(e){var t={};function n(a){if(t[a])return t[a].exports;var r=t[a]={i:a,l:!1,exports:{}};return e[a].call(r.exports,r,r.exports,n),r.l=!0,r.exports}n.m=e,n.c=t,n.d=function(e,t,a){n.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:a})},n.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},n.t=function(e,t){if(1&t&&(e=n(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var a=Object.create(null);if(n.r(a),Object.defineProperty(a,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var r in e)n.d(a,r,function(t){return e[t]}.bind(null,r));return a},n.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return n.d(t,"a",t),t},n.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},n.p="/",n(n.s=4)}({4:function(e,t,n){e.exports=n("lX53")},lX53:function(e,t,n){"use strict";n.r(t);var a,r,i,o,c,s,m=n("tygL"),u=!1;function l(){var e=$("#map-layer-form"),t=$("#map-marker-form"),n=$("#map-marker-new-form"),a=$("#map-group-form");0===e.length&&0===t.length&&0===a.length&&0===n.length||(e.unbind("submit").on("submit",(function(){window.entityFormHasUnsavedChanges=!1})),t.unbind("submit").on("submit",(function(){window.entityFormHasUnsavedChanges=!1})),a.unbind("submit").on("submit",(function(){window.entityFormHasUnsavedChanges=!1})),n.unbind("submit").on("submit",(function(e){if(window.entityFormHasUnsavedChanges=!1,u)return!0;e.preventDefault(),$.ajaxSetup({headers:{"X-CSRF-TOKEN":$('meta[name="csrf-token"]').attr("content")}}),$("#map-marker-new-form .btn-success span").hide(),$("#map-marker-new-form .btn-success i.fa").show(),$.ajax({url:$(this).attr("action"),method:$(this).attr("method"),data:$(this).serialize()}).done((function(e){return u=!0,n.submit(),!0})).fail((function(e){console.log("error",e);var t=e.responseJSON.errors,n=Object.keys(t);n.forEach((function(e){var n=$('[name="'+e+'"]');n.length>0?n.hasClass("input-error")||n.addClass("input-error").parent().append('<div class="text-danger">'+t[e][0]+"</div>"):!1})),$("#map-marker-new-form .btn-success span").show(),$("#map-marker-new-form .btn-success i.fa").hide()}))})))}$(document).ready((function(){window.map.invalidateSize(),window.map.on("popupopen",(function(e){Object(m.a)()})),$('a[href="#marker-pin"]').click((function(e){$('input[name="shape_id"]').val(1)})),$('a[href="#marker-label"]').click((function(e){$('input[name="shape_id"]').val(2)})),$('a[href="#marker-circle"]').click((function(e){$('input[name="shape_id"]').val(3)})),$('a[href="#marker-poly"]').click((function(e){$('input[name="shape_id"]').val(5)})),$('a[href="#form-markers"]').click((function(e){window.map.invalidateSize()})),a=$("#map-body"),r=$("#sidebar-map"),i=$("#sidebar-marker"),o=$("#map-marker-modal"),s=$("#map-marker-modal-title"),c=$("#map-marker-modal-content"),$.ajaxSetup({headers:{"X-CSRF-TOKEN":$('meta[name="csrf-token"]').attr("content")}}),window.markerDetails=function(e){!function(){var e='<div class="text-center"><i class="fa fa-spin fa-spinner fa-2x"></i></div>';if(window.kankaIsMobile.matches)return c.html(e),void o.modal("toggle");a.removeClass("sidebar-collapse").addClass("sidebar-open"),r.hide(),i.show().html(e)}(),window.kankaIsMobile.matches&&(e+="?mobile=1"),$.ajax({url:e,type:"GET",async:!0,success:function(e){e&&(window.kankaIsMobile.matches?(s.html(e.name),c.html(e.body)):(i.html(e.body),$(".marker-close").click((function(e){i.hide(),r.show()})),a.addClass("sidebar-open")),Object(m.a)())}})},$(".map-legend-marker").click((function(e){e.preventDefault(),window.map.panTo(L.latLng($(this).data("lat"),$(this).data("lng"))),window[$(this).data("id")].openPopup()})),l()})),$(document).on("shown.bs.modal shown.bs.popover",(function(){l()}))},tygL:function(e,t,n){"use strict";function a(){$.each($(".delete-confirm"),(function(){$(this).click((function(e){console.log("clicked");var t=$(this).data("name"),n=$(this).data("text"),a=$(this).data("delete-target");n?$("#delete-confirm-text").text(n):$("#delete-confirm-name").text(t),$(this).data("mirrored")?$("#delete-confirm-mirror").show():$("#delete-confirm-mirror").hide(),a&&$("#delete-confirm-submit").data("target",a)}))})),$.each($("#delete-confirm-submit"),(function(e){$(this).unbind("click"),$(this).click((function(e){console.log("clicky submit");var t=$(this).data("target");t?($("#"+t+" input[name=remove_mirrored]").val($("#delete-confirm-mirror-chexkbox").is(":checked")?1:0),$("#"+t).submit()):$("#delete-confirm-form").submit()}))})),$.each($(".click-confirm"),(function(e){$(this).click((function(e){var t=$(this).data("message");$("#click-confirm-text").text(t),$("#click-confirm-url").attr("href",$(this).data("url"))}))}))}n.d(t,"a",(function(){return a}))}});