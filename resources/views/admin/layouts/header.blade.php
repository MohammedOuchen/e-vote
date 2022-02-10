<div id="header" class="mdk-header js-mdk-header m-0" data-fixed>
    <div class="mdk-header__content">

        <div class="navbar navbar-expand-sm navbar-main navbar-dark bg-dark  pr-0" id="navbar" data-primary>
            <div class="container-fluid p-0">

                <!-- Navbar toggler -->

                <button class="navbar-toggler navbar-toggler-right d-block d-lg-none" type="button"
                    data-toggle="sidebar">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Navbar Brand -->
                <a href="" class="navbar-brand ">
                    <span>E-vote</span>
                </a>

                <ul class="nav navbar-nav ml-auto d-none d-md-flex">
                    <li class="nav-item dropdown">
                        <a href="#notifications_menu" class="nav-link dropdown-toggle" data-toggle="dropdown"
                            data-caret="false">
                            <i class="material-icons nav-icon {{ true ? 'navbar-notifications-indicator' : '' }}">
                                notifications
                            </i>
                        </a>
                        <div id="notifications_menu" style="overflow: hidden;"
                            class="dropdown-menu dropdown-menu-right navbar-notifications-menu">
                            <div class="dropdown-item d-flex align-items-center py-2">
                                <span
                                    class="flex navbar-notifications-menu__title m-0">{{ __('front.notifications.title') }}</span>
                                <form action="" id="clearAllForm" method="post">
                                    @csrf
                                </form>
                                <a href="#" onclick="document.querySelector('#clearAllForm').submit()" id="clearAll"
                                    class="text-muted">
                                    <small>{{ __('front.notifications.clear') }}</small>
                                </a>
                            </div>
                            <div class="navbar-notifications-menu__content" data-perfect-scrollbar>
                                <div class="py-2">
                                    {{-- @forelse (Auth::user()->unreadNotifications as $notification)
                                        @include('notifications.show' . explode('\\', $notification->type)[2])
                                    @empty --}}
                                    <div style="margin-top: 60px;" class="dropdown-item d-flex justify-content-center">
                                        {{ __('front.notifications.empty') }}
                                    </div>
                                    {{-- @endforelse --}}
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>

                <ul class="nav navbar-nav d-none d-sm-flex border-left navbar-height align-items-center">
                    <li class="nav-item dropdown">
                        <a href="#account_menu" class="nav-link dropdown-toggle" data-toggle="dropdown"
                            data-caret="false">
                            <span class="mr-1 d-flex-inline">
                                <span class="text-light">{{ Auth::user()->full_name }}</span>
                            </span>
                        </a>
                        <div id="account_menu" class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="">
                                <i class="material-icons">dvr</i> Dashboard
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

@section('scripts')
<script>
$(document).ready(() => {
    $("#clearAll").click(() => {
        $("#clearAllForm").submit();
    })
})
</script>
@endsection