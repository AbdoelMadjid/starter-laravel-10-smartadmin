<li class="nav-title">Layouts & Apps</li>
<li class="{{ Request::is('pages/*') ? 'active open' : '' }}">
    <a href="#" title="Pages" data-filter-tags="pages">
        <i class="fal fa-plus-circle"></i>
        <span class="nav-link-text" data-i18n="nav.pages">Page Views</span>
    </a>
    <ul>
        <li class="{{ Request::is('pages/other/chat*') ? 'active' : '' }}">
            <a href="{{ route('chat') }}" title="Chat" data-filter-tags="pages chat">
                <span class="nav-link-text" data-i18n="nav.pages_chat">Chat</span>
            </a>
        </li>
        <li class="{{ Request::is('pages/other/contacts*') ? 'active' : '' }}">
            <a href="{{ route('contacts') }}" title="Contacts" data-filter-tags="pages contacts">
                <span class="nav-link-text" data-i18n="nav.pages_contacts">Contacts</span>
            </a>
        </li>
        <li class="{{ Request::is('pages/forum/*') ? 'active open' : '' }}">
            <a href="javascript:void(0);" title="Forum" data-filter-tags="pages forum">
                <span class="nav-link-text" data-i18n="nav.pages_forum">Forum</span>
            </a>
            <ul>
                <li class="{{ Request::is('pages/forum/list*') ? 'active' : '' }}">
                    <a href="{{ route('list') }}" title="List" data-filter-tags="pages forum list">
                        <span class="nav-link-text" data-i18n="nav.pages_forum_list">List</span>
                    </a>
                </li>
                <li class="{{ Request::is('pages/forum/threads*') ? 'active' : '' }}">
                    <a href="{{ route('threads') }}" title="Threads" data-filter-tags="pages forum threads">
                        <span class="nav-link-text" data-i18n="nav.pages_forum_threads">Threads</span>
                    </a>
                </li>
                <li class="{{ Request::is('pages/forum/discussion*') ? 'active' : '' }}">
                    <a href="{{ route('discussion') }}" title="Discussion" data-filter-tags="pages forum discussion">
                        <span class="nav-link-text" data-i18n="nav.pages_forum_discussion">Discussion</span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="{{ Request::is('pages/inbox/*') ? 'active open' : '' }}">
            <a href="javascript:void(0);') }}" title="Inbox" data-filter-tags="pages inbox">
                <span class="nav-link-text" data-i18n="nav.pages_inbox">Inbox</span>
            </a>
            <ul>
                <li class="{{ Request::is('pages/inbox/general_inbox*') ? 'active' : '' }}">
                    <a href="{{ route('general_inbox') }}" title="General" data-filter-tags="pages inbox general">
                        <span class="nav-link-text" data-i18n="nav.pages_inbox_general">General</span>
                    </a>
                </li>
                <li class="{{ Request::is('pages/inbox/inbox_read*') ? 'active' : '' }}">
                    <a href="{{ route('read') }}" title="Read" data-filter-tags="pages inbox read">
                        <span class="nav-link-text" data-i18n="nav.pages_inbox_read">Read</span>
                    </a>
                </li>
                <li class="{{ Request::is('pages/inbox/inbox_write*') ? 'active' : '' }}">
                    <a href="{{ route('write') }}" title="Write" data-filter-tags="pages inbox write">
                        <span class="nav-link-text" data-i18n="nav.pages_inbox_write">Write</span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="{{ Request::is('pages/other/invoice*') ? 'active' : '' }}">
            <a href="{{ route('invoice') }}" title="Invoice (printable)" data-filter-tags="pages invoice (printable)">
                <span class="nav-link-text" data-i18n="nav.pages_invoice_(printable)">Invoice
                    (printable)</span>
            </a>
        </li>
        <li class="{{ Request::is('pages/authentication/*') ? 'active open' : '' }}">
            <a href="javascript:void(0);') }}" title="Authentication" data-filter-tags="pages authentication">
                <span class="nav-link-text" data-i18n="nav.pages_authentication">Authentication</span>
            </a>
            <ul>
                <li class="{{ Request::is('pages/authentication/auth_forget*') ? 'active' : '' }}">
                    <a href="{{ route('auth_forget') }}" title="Forget Password"
                        data-filter-tags="pages authentication forget password">
                        <span class="nav-link-text" data-i18n="nav.pages_authentication_forget_password">Forget
                            Password</span>
                    </a>
                </li>
                <li class="{{ Request::is('pages/authentication/auth_locked*') ? 'active' : '' }}">
                    <a href="{{ route('auth_locked') }}" title="Locked Screen"
                        data-filter-tags="pages authentication locked screen">
                        <span class="nav-link-text" data-i18n="nav.pages_authentication_locked_screen">Locked
                            Screen</span>
                    </a>
                </li>
                <li class="{{ Request::is('pages/authentication/auth_login*') ? 'active' : '' }}">
                    <a href="{{ route('auth_login') }}" title="Login" data-filter-tags="pages authentication login">
                        <span class="nav-link-text" data-i18n="nav.pages_authentication_login">Login</span>
                    </a>
                </li>
                <li class="{{ Request::is('pages/authentication/auth_login_alt*') ? 'active' : '' }}">
                    <a href="{{ route('auth_login_alt') }}" title="Login Alt"
                        data-filter-tags="pages authentication login alt">
                        <span class="nav-link-text" data-i18n="nav.pages_authentication_login_alt">Login
                            Alt</span>
                    </a>
                </li>
                <li class="{{ Request::is('pages/authentication/auth_register*') ? 'active' : '' }}">
                    <a href="{{ route('auth_register') }}" title="Register"
                        data-filter-tags="pages authentication register">
                        <span class="nav-link-text" data-i18n="nav.pages_authentication_register">Register</span>
                    </a>
                </li>
                <li class="{{ Request::is('pages/authentication/auth_confirmation*') ? 'active' : '' }}">
                    <a href="{{ route('auth_confirmation') }}" title="Confirmation"
                        data-filter-tags="pages authentication confirmation">
                        <span class="nav-link-text"
                            data-i18n="nav.pages_authentication_confirmation">Confirmation</span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="{{ Request::is('pages/error/*') ? 'active open' : '' }}">
            <a href="javascript:void(0);') }}" title="Error Pages" data-filter-tags="pages error pages">
                <span class="nav-link-text" data-i18n="nav.pages_error_pages">Error Pages</span>
            </a>
            <ul>
                <li class="{{ Request::is('pages/error/error_general*') ? 'active' : '' }}">
                    <a href="{{ route('error_general') }}" title="General Error"
                        data-filter-tags="pages error pages general error">
                        <span class="nav-link-text" data-i18n="nav.pages_error_pages_general_error">General
                            Error</span>
                    </a>
                </li>
                <li class="{{ Request::is('pages/error/error_404*') ? 'active' : '' }}">
                    <a href="{{ route('error_404') }}" title="Server Error"
                        data-filter-tags="pages error pages server error">
                        <span class="nav-link-text" data-i18n="nav.pages_error_pages_server_error">Server
                            Error</span>
                    </a>
                </li>
                <li class="{{ Request::is('pages/error/announced*') ? 'active' : '' }}">
                    <a href="{{ route('error_announced') }}" title="Announced Error"
                        data-filter-tags="pages error pages announced error">
                        <span class="nav-link-text" data-i18n="nav.pages_error_pages_announced_error">Announced
                            Error</span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="{{ Request::is('pages/other/profile*') ? 'active' : '' }}">
            <a href="{{ route('profile') }}" title="Profile" data-filter-tags="pages profile">
                <span class="nav-link-text" data-i18n="nav.pages_profile">Profile</span>
            </a>
        </li>
        <li class="{{ Request::is('pages/other/projects*') ? 'active' : '' }}">
            <a href="{{ route('projects') }}" title="Projects" data-filter-tags="pages projects">
                <span class="nav-link-text" data-i18n="nav.pages_projects">Projects</span>
            </a>
        </li>
        <li class="{{ Request::is('pages/other/search*') ? 'active' : '' }}">
            <a href="{{ route('search') }}" title="Search Results" data-filter-tags="pages search results">
                <span class="nav-link-text" data-i18n="nav.pages_search_results">Search Results</span>
            </a>
        </li>
    </ul>
</li>
