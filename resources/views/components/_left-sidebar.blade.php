<div class="left-side-bar">
    <div class="brand-logo">
        <a href="{{ route('dashboard') }}" class="brand-logo-text">
            {{ config('app.name', 'Laravel')}}
        </a>
        <div class="close-sidebar" data-toggle="left-sidebar-close">
            <i class="ion-close-round"></i>
        </div>
    </div>
    <div class="menu-block customscroll">
        <div class="sidebar-menu">
            <ul id="accordion-menu">
                <li class="mt-4 mb-2">
                    <div class="sidebar-small-cap">Utama</div>
                </li>
                <li>
                    <a href="{{ route('dashboard') }}" class="dropdown-toggle no-arrow {{ request()->is('dashboard') ? 'active' : '' }}">
                        <i class="micon dw dw-home"></i><span class="mtext">Dashboard</span>
                    </a>
                </li>
                <li class="mt-4 mb-2">
                    <div class="sidebar-small-cap">Menu dan Fitur</div>
                </li>
                <li>
                    <a href="{{ route('activity.index') }}" class="dropdown-toggle no-arrow {{ request()->is('activity*') ? 'active' : '' }}">
                        <i class="micon dw dw-paperclip"></i><span class="mtext">Aktivitas Ahli Gizi</span>
                    </a>
                </li>
                <!-- <li>
                    <div class="dropdown-divider"></div>
                </li> -->
                <li class="mt-4 mb-2">
                    <div class="sidebar-small-cap">Akun</div>
                </li>
                <li>
                    <a href="{{ route('profile.index') }}" class="dropdown-toggle no-arrow {{ request()->is('profile') ? 'active' : '' }}">
                        <i class="micon dw dw-user2"></i><span class="mtext">Profil</span>
                    </a>
                </li>
                <li class="d-none">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon dw dw-edit-2"></span><span class="mtext">Documentation</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="introduction.html">Introduction</a></li>
                        <li><a href="getting-started.html">Getting Started</a></li>
                        <li><a href="color-settings.html">Color Settings</a></li>
                        <li><a href="third-party-plugins.html">Third Party Plugins</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>