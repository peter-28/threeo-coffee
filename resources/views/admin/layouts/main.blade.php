<!DOCTYPE html>

<html class="light-style layout-menu-fixed" data-theme="theme-default" data-assets-path="http://127.0.0.1:8000/assets/"
    data-base-url="http://127.0.0.1:8000" data-framework="laravel" data-template="vertical-menu-laravel-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Dashboard - Analytics | Materio - HTML Laravel Free Admin Template </title>
    <meta name="description"
        content="Most Powerful &amp; Comprehensive Bootstrap 5 HTML Admin Dashboard Template built for developers!" />
    <meta name="keywords"
        content="dashboard, bootstrap 5 dashboard, bootstrap 5 design, bootstrap 5, bootstrap 5 free, free admin template">
    <!-- laravel CRUD token -->
    <meta name="csrf-token" content="NSPg0yyZKeRe64IY9dJL5TOWu3jlwVWMdJO5ow8S">
    <!-- Canonical SEO -->
    <link rel="canonical" href="https://themeselection.com/item/materio-free-bootstrap-html-laravel-admin-template/">
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="http://127.0.0.1:8000/assets/img/favicon/favicon.ico" />



    <!-- Include Styles -->
    <!-- BEGIN: Theme CSS-->
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&ampdisplay=swap"
        rel="stylesheet">

    <link rel="stylesheet"
        href="{{ asset('assets/vendor/fonts/materialdesignicons.css?id=fd8a1ef2189640c8a2b31522be6f9bf3') }}" />
    <link rel="stylesheet"
        href="{{ asset('assets/vendor/libs/node-waves/node-waves.css?id=a500d0e1f1c5760ae32e668656762785') }}" />
    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/core.css?id=01a0256e194d1ccac1f23c264d0259f1') }}" />
    <link rel="stylesheet"
        href="{{ asset('assets/vendor/css/theme-default.css?id=819d0b7acd417c583ea6d086fbf4e841') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/demo.css?id=0f3ae65b84f44dbd4971231c5d97ac3b') }}" />
    <!-- Vendors CSS -->
    <link rel="stylesheet"
        href="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css?id=75313662f2f1e3549bc0018cd908e23c') }}" />

    <!-- Vendor Styles -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/apex-charts/apex-charts.css') }}">


    <!-- Page Styles -->

    <!-- Include Scripts for customizer, helper, analytics, config -->
    <!-- laravel style -->
    <script src="{{ asset('assets/vendor/js/helpers.js') }}"></script>

    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{ asset('assets/js/config.js') }}"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
</head>

<body>
    <!-- Layout Content -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            @include('admin.layouts.menu')
            <!-- Layout page -->
            <div class="layout-page">
                <!-- BEGIN: Navbar-->
                <!-- Navbar -->
                @include('admin.layouts.navbar')
                <!-- / Navbar -->
                <!-- END: Navbar-->

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->
                    <div class="container-xxl flex-grow-1">
                        @yield('content')
                    </div>
                    <!-- / Content -->

                    <!-- Footer -->
                    <!-- Footer-->
                    @include('admin.layouts.footer')
                    <!--/ Footer-->
                    <!-- / Footer -->
                    <div class="content-backdrop fade"></div>
                </div>
                <!--/ Content wrapper -->
            </div>
            <!-- / Layout page -->
        </div>

        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>
        <!-- Drag Target Area To SlideIn Menu On Small Screens -->
        <div class="drag-target"></div>
    </div>
    <!-- / Layout wrapper -->
    <!--/ Layout Content -->



    <!-- Include Scripts -->
    <!-- BEGIN: Vendor JS-->
    <script src="{{ asset('assets/vendor/libs/jquery/jquery.js?id=d6912bbf9b29bbcc108b2a81baac5fb1') }}"></script>
    <script src="{{ asset('assets/vendor/libs/popper/popper.js?id=f5aae921cb2529b79f3186eebddf5a32') }}"></script>
    <script src="{{ asset('assets/vendor/js/bootstrap.js?id=d8227cb9ef0fe5160e49a413c14bc97e') }}"></script>
    <script src="{{ asset('assets/vendor/libs/node-waves/node-waves.js?id=19c0709d4c0c675c25696c7f594132ca') }}">
    </script>
    <script
        src="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js?id=7c36751c61f8450005e3e6f02bb84ab6') }}">
    </script>
    <script src="{{ asset('assets/vendor/js/menu.js?id=d20d4c6cb4af8e665da4e49ce564dd18') }}"></script>
    <script src="{{ asset('assets/vendor/libs/apex-charts/apexcharts.js') }}"></script>
    <!-- END: Page Vendor JS-->
    <!-- BEGIN: Theme JS-->
    <script src="{{ asset('assets/js/main.js?id=4f816bbbc912e9a5bcff6119bc265966') }}"></script>

    <!-- END: Theme JS-->
    <!-- Pricing Modal JS-->
    <!-- END: Pricing Modal JS-->
    <!-- BEGIN: Page JS-->
    <script src="{{ asset('assets/js/dashboards-analytics.js') }}"></script>
    <!-- END: Page JS-->
    @stack('page-scripts')

</body>

</html>
