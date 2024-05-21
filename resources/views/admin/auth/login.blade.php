<!DOCTYPE html>

<html class="light-style layout-menu-fixed" data-theme="theme-default" data-assets-path="http://127.0.0.1:8000/assets/"
    data-base-url="http://127.0.0.1:8000" data-framework="laravel" data-template="vertical-menu-laravel-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Login Basic - Pages | Materio - HTML Laravel Free Admin Template </title>
    <meta name="description"
        content="Most Powerful &amp; Comprehensive Bootstrap 5 HTML Admin Dashboard Template built for developers!" />
    <meta name="keywords"
        content="dashboard, bootstrap 5 dashboard, bootstrap 5 design, bootstrap 5, bootstrap 5 free, free admin template">
    <!-- laravel CRUD token -->
    <meta name="csrf-token" content="oLCdV4dbt4Y9JqmBLMXynDYA1fG2WiQFhGyPR68N">
    <!-- Canonical SEO -->
    <link rel="canonical" href="https://themeselection.com/item/materio-free-bootstrap-html-laravel-admin-template/">
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/favicon/favicon.ico') }}" />



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
    <link rel="stylesheet"
        href="{{ asset('assets/vendor/css/core.css?id=01a0256e194d1ccac1f23c264d0259f1') }}" />
    <link rel="stylesheet"
        href="{{ asset('assets/vendor/css/theme-default.css?id=819d0b7acd417c583ea6d086fbf4e841') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/demo.css?id=0f3ae65b84f44dbd4971231c5d97ac3b') }}" />
    <!-- Vendors CSS -->
    <link rel="stylesheet"
        href="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css?id=75313662f2f1e3549bc0018cd908e23c" />

    <!-- Vendor Styles -->


    <!-- Page Styles -->
    <!-- Page -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/pages/page-auth.css') }}">

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

    <!-- Content -->
    <div class="position-relative">
        <div class="authentication-wrapper authentication-basic container-p-y">
            <div class="authentication-inner py-4">

                <!-- Login -->
                <div class="card p-2">
                    <!-- Logo -->
                    <div class="app-brand justify-content-center mt-5">
                        <a href="http://127.0.0.1:8000" class="app-brand-link gap-2">
                            <span class="app-brand-logo demo"><span style="color:#9055FD;">
                                    <svg width="30" height="20" viewBox="0 0 250 196" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M12.3002 1.25469L56.655 28.6432C59.0349 30.1128 60.4839 32.711 60.4839 35.5089V160.63C60.4839 163.468 58.9941 166.097 56.5603 167.553L12.2055 194.107C8.3836 196.395 3.43136 195.15 1.14435 191.327C0.395485 190.075 0 188.643 0 187.184V8.12039C0 3.66447 3.61061 0.0522461 8.06452 0.0522461C9.56056 0.0522461 11.0271 0.468577 12.3002 1.25469Z"
                                            fill="currentColor" />
                                        <path opacity="0.077704" fill-rule="evenodd" clip-rule="evenodd"
                                            d="M0 65.2656L60.4839 99.9629V133.979L0 65.2656Z" fill="black" />
                                        <path opacity="0.077704" fill-rule="evenodd" clip-rule="evenodd"
                                            d="M0 65.2656L60.4839 99.0795V119.859L0 65.2656Z" fill="black" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M237.71 1.22393L193.355 28.5207C190.97 29.9889 189.516 32.5905 189.516 35.3927V160.631C189.516 163.469 191.006 166.098 193.44 167.555L237.794 194.108C241.616 196.396 246.569 195.151 248.856 191.328C249.605 190.076 250 188.644 250 187.185V8.09597C250 3.64006 246.389 0.027832 241.935 0.027832C240.444 0.027832 238.981 0.441882 237.71 1.22393Z"
                                            fill="currentColor" />
                                        <path opacity="0.077704" fill-rule="evenodd" clip-rule="evenodd"
                                            d="M250 65.2656L189.516 99.8897V135.006L250 65.2656Z" fill="black" />
                                        <path opacity="0.077704" fill-rule="evenodd" clip-rule="evenodd"
                                            d="M250 65.2656L189.516 99.0497V120.886L250 65.2656Z" fill="black" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M12.2787 1.18923L125 70.3075V136.87L0 65.2465V8.06814C0 3.61223 3.61061 0 8.06452 0C9.552 0 11.0105 0.411583 12.2787 1.18923Z"
                                            fill="currentColor" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M12.2787 1.18923L125 70.3075V136.87L0 65.2465V8.06814C0 3.61223 3.61061 0 8.06452 0C9.552 0 11.0105 0.411583 12.2787 1.18923Z"
                                            fill="white" fill-opacity="0.15" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M237.721 1.18923L125 70.3075V136.87L250 65.2465V8.06814C250 3.61223 246.389 0 241.935 0C240.448 0 238.99 0.411583 237.721 1.18923Z"
                                            fill="currentColor" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M237.721 1.18923L125 70.3075V136.87L250 65.2465V8.06814C250 3.61223 246.389 0 241.935 0C240.448 0 238.99 0.411583 237.721 1.18923Z"
                                            fill="white" fill-opacity="0.3" />
                                    </svg>
                                </span>
                            </span>
                            <span class="app-brand-text demo text-heading fw-semibold">Materio</span>
                        </a>
                    </div>
                    <!-- /Logo -->

                    <div class="card-body mt-2">
                        <h4 class="mb-2">Welcome to Materio! 👋</h4>
                        <p class="mb-4">Please sign-in to your account and start the adventure</p>

                        <form id="form-login" class="mb-3" action="{{ route('login.action') }}" method="post">
                          @csrf
                            <div class="form-floating form-floating-outline mb-3">
                                <input type="text" class="form-control" id="email" name="email"
                                    placeholder="Enter your email or username" autofocus>
                                <label for="email">Email or Username</label>
                            </div>
                            <div class="mb-3">
                                <div class="form-password-toggle">
                                    <div class="input-group input-group-merge">
                                        <div class="form-floating form-floating-outline">
                                            <input type="password" id="password" class="form-control"
                                               name="password"
                                                placeholder="Silahkan masukkan password"
                                                aria-describedby="password" />
                                            <label for="password">Password</label>
                                        </div>
                                        <span class="input-group-text cursor-pointer"><i
                                                class="mdi mdi-eye-off-outline"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3 d-flex justify-content-between">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="remember-me">
                                    <label class="form-check-label" for="remember-me">
                                        Remember Me
                                    </label>
                                </div>
                                <a href="#" class="float-end mb-1">
                                    <span>Forgot Password?</span>
                                </a>
                            </div>
                            <div class="mb-3">
                                <button class="btn btn-primary d-grid w-100" type="submit">Sign in</button>
                            </div>
                        </form>

                        <p class="text-center">
                            <span>New on our platform?</span>
                            <a href="#">
                                <span>Create an account</span>
                            </a>
                        </p>
                    </div>
                </div>
              
            </div>
        </div>
    </div>
    <!--/ Content -->

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
    <!-- END: Page Vendor JS-->
    <!-- BEGIN: Theme JS-->
    <script src="{{ asset('assets/js/main.js?id=4f816bbbc912e9a5bcff6119bc265966') }}"></script>

    <!-- END: Theme JS-->
    <!-- Pricing Modal JS-->
    <!-- END: Pricing Modal JS-->
    <!-- BEGIN: Page JS-->
    <!-- END: Page JS-->

</body>

</html>
