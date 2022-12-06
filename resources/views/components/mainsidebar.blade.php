<ul class="navbar-nav">
    @if(Auth::User()->project_id == 0)
        <li class="nav-item">
            <a
                class="nav-link text-white @if($currentroute == 'Projects') bg-gradient-primary @endif "
                href="/projectscreen"
            >
                <div
                    class="
                        text-white text-center
                        me-2
                        d-flex
                        align-items-center
                        justify-content-center
                    "
                >
                    <i class="material-icons opacity-10">dashboard</i>
                </div>
                <span class="nav-link-text ms-1">Project</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white @if($currentroute == 'Attach Users') bg-gradient-primary @endif" href="/attachuser">
                <div
                    class="
                        text-white text-center
                        me-2
                        d-flex
                        align-items-center
                        justify-content-center
                    "
                >
                    <i class="material-icons opacity-10">group_add</i>
                </div>
                <span class="nav-link-text ms-1">Attach Users</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white @if($currentroute == 'Permissions') bg-gradient-primary @endif" href="/permissions">
                <div
                    class="
                        text-white text-center
                        me-2
                        d-flex
                        align-items-center
                        justify-content-center
                    "
                >
                    <i class="material-icons opacity-10">receipt_long</i>
                </div>
                <span class="nav-link-text ms-1">Permissions</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white @if($currentroute == 'Settings') bg-gradient-primary @endif" href="/settings">
                <div
                    class="
                        text-white text-center
                        me-2
                        d-flex
                        align-items-center
                        justify-content-center
                    "
                >
                    <i class="material-icons opacity-10">view_in_ar</i>
                </div>
                <span class="nav-link-text ms-1">Settings</span>
            </a>
        </li>
    @else
        <li class="nav-item">
            <a
                class="nav-link text-white @if($currentroute == 'Projects') bg-gradient-primary @endif "
                href="/projectscreen"
            >
                <div
                    class="
                        text-white text-center
                        me-2
                        d-flex
                        align-items-center
                        justify-content-center
                    "
                >
                    <i class="material-icons opacity-10">dashboard</i>
                </div>
                <span class="nav-link-text ms-1">My Projects</span>
            </a>
        </li>
        <li class="nav-item">
            <a
                class="nav-link text-white @if($currentroute == 'Consumers') bg-gradient-primary @endif "
                href="/consumers"
            >
                <div
                    class="
                        text-white text-center
                        me-2
                        d-flex
                        align-items-center
                        justify-content-center
                    "
                >
                    <i class="material-icons opacity-10">group_add</i>
                </div>
                <span class="nav-link-text ms-1">Consumers</span>
            </a>
        </li>
        
    @endif
</ul>
