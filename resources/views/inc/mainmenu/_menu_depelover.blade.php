<li class="nav-title">Develovers</li>
<li class="{{ Request::is('dev/dev_*') ? 'active open' : '' }}">
    <a href="#" title="Depelover" data-filter-tags="develpoer">
        <i class="fal fa-code"></i>
        <span class="nav-link-text" data-i18n="nav.depelover">Depelover</span>
    </a>
    <ul>
        <li class="{{ Request::is('dev/dev_component') ? 'active' : '' }}">
            <a href="{{ route('dev_component') }}" title="Component" data-filter-tags="application component">
                <span class="nav-link-text" data-i18n="nav.application_component">Component</span>
            </a>
        </li>
        <li class="{{ Request::is('dev/dev_landing_page') ? 'active' : '' }}">
            <a href="{{ route('dev_landing_page') }}" title="Landing Page" data-filter-tags="application landing page">
                <span class="nav-link-text" data-i18n="nav.application_landing_page">Landing Page</span>
            </a>
        </li>
    </ul>
</li>
