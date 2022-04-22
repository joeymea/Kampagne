<div class="tab-pane {{ (request()->get('tab') == 'entity' ? ' active' : '') }}" id="entity">
    @include('menu_links.form._entity', ['source' => null])
</div>
<div class="tab-pane {{ (request()->get('tab') == 'type' ? ' active' : '') }}" id="type">
    @include('menu_links.form._type', ['source' => null])
</div>

<div class="tab-pane {{ (request()->get('tab') == 'random' ? ' active' : '') }}" id="random">
    @include('menu_links.form._random', ['source' => null])
</div>
<div class="tab-pane {{ (request()->get('tab') == 'dashboard' ? ' active' : '') }}" id="dashboard">
    @include('menu_links.form._dashboard', ['source' => null])
</div>
