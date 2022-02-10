<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Administration</title>

    <!-- Prevent the demo from appearing in search engines -->
    <meta name="robots" content="noindex">

    <!-- Perfect Scrollbar -->
    <link type="text/css" href="{{ asset('admin_ressources/vendor/perfect-scrollbar.css') }}" rel="stylesheet">

    <!-- Admin Template CSS -->
    <link type="text/css" href="{{ asset('admin_ressources/css/app.css') }}" rel="stylesheet">

    <!-- Select 2 -->
    <link type="text/css" href="{{ asset('admin_ressources/vendor/select2/select2.min.css') }}" rel="stylesheet">

    <!-- Material Design Icons -->
    <link type="text/css" href="{{ asset('admin_ressources/css/vendor-material-icons.css') }}" rel="stylesheet">

    <!-- Font Awesome FREE Icons -->
    <link type="text/css" href="{{ asset('admin_ressources/css/vendor-fontawesome-free.css') }}" rel="stylesheet">

    @yield('styles')

</head>

<body class="layout-default">



    <div class="mdk-header-layout js-mdk-header-layout">

        @include('admin.layouts.header')

        <div class="mdk-header-layout__content">
            <div class="mdk-drawer-layout js-mdk-drawer-layout" data-push data-responsive-width="992px">
                <div class="mdk-drawer-layout__content page">

                    <div class="container-fluid page__heading-container">
                        <div class="page__heading d-flex align-items-center">
                            <div class="flex">
                                {{-- <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb mb-0">
                                        <li class="breadcrumb-item"><a href="#"><i
                                                    class="material-icons icon-20pt">home</i></a></li>
                                        <li class="breadcrumb-item">Blank</li>
                                        <li class="breadcrumb-item active" aria-current="page">Page</li>
                                    </ol>
                                </nav> --}}

                                <div class="d-flex" style="flex-direction: row;">
                                    <h1>@yield('main_title')</h1>
                                </div>
                            </div>

                            @yield('actions')
                        </div>
                    </div>
                    <div class="container-fluid page__container">
                        @yield('content')
                    </div>

                </div>

                @include('admin.layouts.sidebar')

            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="{{ asset('admin_ressources/vendor/jquery.min.js') }}"></script>

    <!-- Bootstrap -->
    <script src="{{ asset('admin_ressources/vendor/popper.min.js') }}"></script>
    <script src="{{ asset('admin_ressources/vendor/bootstrap.min.js') }}"></script>

    <!-- Perfect Scrollbar -->
    <script src="{{ asset('admin_ressources/vendor/perfect-scrollbar.min.js') }}"></script>

    <!-- DOM Factory -->
    <script src="{{ asset('admin_ressources/vendor/dom-factory.js') }}"></script>

    <!-- MDK -->
    <script src="{{ asset('admin_ressources/vendor/material-design-kit.js') }}"></script>

    <!-- App -->
    <script src="{{ asset('admin_ressources/js/toggle-check-all.js') }}"></script>
    <script src="{{ asset('admin_ressources//js/check-selected-row.js') }}"></script>
    <script src="{{ asset('admin_ressources/js/dropdown.js') }}"></script>
    <script src="{{ asset('admin_ressources/js/sidebar-mini.js') }}"></script>
    <script src="{{ asset('admin_ressources/js/admin-template.js') }}"></script>

    <!-- Select 2 -->
    <script src="{{ asset('admin_ressources/vendor/select2/select2.min.js') }}"></script>

    <!-- App Settings (safe to remove) -->
    <script src="{{ asset('admin_ressources/js/admin-template-settings.js') }}"></script>

    @yield('scripts')

</body>

</html>
