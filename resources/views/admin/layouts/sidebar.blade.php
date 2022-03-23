<div class="mdk-drawer  js-mdk-drawer" id="default-drawer" data-align="start">
    <div class="mdk-drawer__content">
        <div class="sidebar sidebar-light sidebar-left sidebar-p-t" data-perfect-scrollbar>
            <div class="sidebar-heading">Admin</div>
            <ul class="sidebar-menu" id="components_menu">
                <li class="sidebar-menu-item ">
                    <a class="sidebar-menu-button" href="{{ route('admin-vote.index') }}">
                        <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">people</i>
                        <span class="sidebar-menu-text">Voteurs</span>
                    </a>
                </li>
                <li class="sidebar-menu-item ">
                    <a class="sidebar-menu-button" href="{{ route('admin-condidate.index') }}">
                        <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">people</i>
                        <span class="sidebar-menu-text">Candidats</span>
                    </a>
                </li>
                <li class="sidebar-menu-item ">
                    <a class="sidebar-menu-button" href="{{ route('admin-election.index') }}">
                        <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">people</i>
                        <span class="sidebar-menu-text">Elections</span>
                    </a>
                </li>

                </li>
            </ul>
        </div>
    </div>
</div>