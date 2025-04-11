<!DOCTYPE html>
<html lang="en" class="h-full" dir="ltr" data-nav-layout="horizontal" data-nav-style="menu-click"
    data-menu-position="fixed" style="--primary: 58 88 146; --primary-rgb: 58, 88, 146;">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Site Name - Landing Page </title>
    <meta name="description"
        content="A Tailwind CSS admin template is a pre-designed web page for an admin dashboard. Optimizing it for SEO includes using meta descriptions and ensuring it's responsive and fast-loading.">
    <meta name="keywords"
        content="dashboard,admin dashboard,template dashboard,html,html dashboard,admin dashboard template,admin template,tailwind ui,admin panel,html and css,html admin template,tailwind framework,html css javascript,tailwind css dashboard,dashboard html css,admin,template admin panel,dashboard html template">

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('backend/assets/images/brand-logos/favicon.ico') }}" type="image/x-icon">

    <!-- Main JS -->
    <script src="{{ asset('backend/assets/js/main.js') }}"></script>

    <!-- Style Css -->
    <link rel="stylesheet" href="{{ asset('backend/assets/css/style.css') }}">

    <!-- Simplebar Css -->
    <link id="style" href="{{ asset('backend/assets/libs/simplebar/simplebar.min.css') }}" rel="stylesheet">

    <!-- Simplebar Css -->
    <link rel="stylesheet" href="{{ asset('backend/assets/libs/simplebar/simplebar.min.css') }}">

    <!-- Color Picker Css -->
    <link rel="stylesheet" href="{{ asset('backend/assets/libs/@simonwep/pickr/themes/nano.min.css') }}">

    <!-- Swiper Css -->
    <link rel="stylesheet" href="{{ asset('backend/assets/libs/swiper/swiper-bundle.min.css') }}">

    <style>
        /* Additional styles to ensure header is not transparent */
        .app-header {
            background-color: white;
            box-shadow: 0 1px 3px 0 rgb(0 0 0 / 0.1), 0 1px 2px -1px rgb(0 0 0 / 0.1);
            position: sticky;
            top: 0;
            z-index: 50;
        }

        /* If you want to use your primary color instead */
        /* .app-header {
            background-color: rgb(var(--primary-rgb));
            color: white;
        } */
    </style>
</head>

<body class="landing-body">
    <div class="landing-page-wrapper relative">

        <!-- Start::Header - Updated with non-transparent styling -->
        <header class="app-header bg-white shadow-sm sticky top-0 z-50">
            <!-- Start::main-header-container -->
            <div class="main-header-container container-fluid">

                <!-- Start::header-content-left -->
                <div class="header-content-left">

                    <!-- Start::header-element -->
                    <div class="header-element">
                        <div class="horizontal-logo">
                            <a href="index.html" class="header-logo">
                                <img src="{{ asset('backend/assets/images/brand-logos/toggle-logo.png') }}"
                                    alt="logo" class="toggle-logo">
                                <img src="{{ asset('backend/assets/images/brand-logos/toggle-dark.png') }}"
                                    alt="logo" class="toggle-dark">
                            </a>
                        </div>
                    </div>
                    <!-- End::header-element -->

                    <!-- Start::header-element -->
                    <div class="header-element">
                        <!-- Start::header-link -->
                        <a aria-label="anchor" href="javascript:void(0);" class="sidemenu-toggle header-link">
                            <span class="open-toggle">
                                <i class="ri-menu-3-line text-xl"></i>
                            </span>
                        </a>
                        <!-- End::header-link -->
                    </div>
                    <!-- End::header-element -->

                </div>
                <!-- End::header-content-left -->

                <!-- Start::header-content-right -->
                <div class="header-content-right">

                    <!-- Start::header-element -->
                    <div class="header-element !items-center">
                        <!-- Start::header-link|switcher-icon -->
                        <div class="lg:hidden block">
                            @if (Route::has('login'))
                                @auth
                                    <h1>Hello User</h1>
                                @else
                                    <a href="{{ route('login') }}" class="ti-btn ti-btn-primary !m-0">
                                        Sign In
                                    </a>
                                @endauth
                            @endif
                        </div>
                        <!-- End::header-link|switcher-icon -->
                    </div>
                    <!-- End::header-element -->

                </div>
                <!-- End::header-content-right -->

            </div>
            <!-- End::main-header-container -->
        </header>
        <!-- End::Header -->

        <!-- Start::app-sidebar -->
        <aside class="app-sidebar sticky !top-0" id="sidebar">
            <div class="container-xl !p-0">
                <!-- Start::main-sidebar -->
                <div class="main-sidebar">
                    <!-- Start::nav -->
                    <nav class="main-menu-container nav nav-pills flex-column sub-open">
                        <div class="landing-logo-container my-auto hidden lg:block">
                            <div class="responsive-logo">
                                <a class="responsive-logo-light" href="index.html" aria-label="Brand"><img
                                        src="{{ asset('backend/assets/images/brand-logos/desktop-logo.png') }}"
                                        alt="logo" class="mx-auto h-[2rem]"></a>
                                <a class="responsive-logo-dark" href="index.html" aria-label="Brand"><img
                                        src="{{ asset('backend/assets/images/brand-logos/desktop-white.png') }}"
                                        alt="logo" class="mx-auto h-[2rem]"></a>
                            </div>
                        </div>
                        <div class="slide-left hidden" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg"
                                fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                                <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path>
                            </svg></div>
                        <ul class="main-menu">
                            <!-- Start::slide -->
                            <li class="slide">
                                <a class="side-menu__item" href="#home">
                                    <span class="side-menu__label">Home</span>
                                </a>
                            </li>
                            <!-- End::slide -->
                            {{-- <!-- Start::slide -->
                            <li class="slide">
                                <a href="{{ route('customer.packages.index') }}" class="side-menu__item">
                                    <span class="side-menu__label">Packages</span>
                                </a>
                            </li>
                            <!-- End::slide --> --}}

                            <!-- Start::slide -->
                            <li class="slide">
                                <a href="#about" class="side-menu__item">
                                    <span class="side-menu__label">Rooms & Suites</span>
                                </a>
                            </li>
                            <!-- End::slide -->

                            <!-- Start::slide -->
                            <li class="slide">
                                <a href="#pricing" class="side-menu__item">
                                    <span class="side-menu__label">Amenities</span>
                                </a>
                            </li>
                            <!-- End::slide -->
                            <!-- Start::slide -->
                            <li class="slide">
                                <a href="#testimonials" class="side-menu__item">
                                    <span class="side-menu__label">Packages</span>
                                </a>
                            </li>
                            <!-- End::slide -->
                            <!-- Start::slide -->
                            <li class="slide">
                                <a href="#faq" class="side-menu__item">
                                    <span class="side-menu__label">Package</span>
                                </a>
                            </li>
                            <!-- End::slide -->
                            <!-- Start::slide -->
                            <li class="slide">
                                <a href="#contact" class="side-menu__item">
                                    <span class="side-menu__label">Contact Us</span>
                                </a>
                            </li>
                            <!-- End::slide -->

                        </ul>
                        <div class="slide-right hidden" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg"
                                fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                                <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z">
                                </path>
                            </svg></div>
                        <div class="lg:flex hidden space-x-2 rtl:space-x-reverse">
                            @if (Route::has('login'))
                                @auth
                                    <li class="slide has-sub">
                                        <a href="javascript:void(0);" class="side-menu__item">
                                            <span class="side-menu__label me-2">{{ Auth::user()->name }}</span>
                                        </a>
                                    </li>

                                    <div
                                        class="header-element md:!px-[0.5rem] px-2 hs-dropdown profile-dropdown !items-center ti-dropdown [--placement:bottom-left]">
                                        <!-- Profile Picture -->
                                        <button id="dropdown-profile" type="button"
                                            class="hs-dropdown-toggle ti-dropdown-toggle !gap-2 !p-0 flex-shrink-0 me-0 !rounded-full !shadow-none text-xs align-middle !border-0 !shadow-transparent ">
                                            <img class="inline-block rounded-full"
                                                src="{{ Auth::user()->profile_image ? asset(Auth::user()->profile_image) : asset('backend/assets/images/faces/default.jpg') }}"
                                                width="37" height="37" alt="Photo">
                                        </button>

                                        <!-- Dropdown Menu -->
                                        <div class="main-header-dropdown !-mt-2 !p-0 hs-dropdown-menu ti-dropdown-menu bg-white !border-0 border-defaultborder hidden !m-0"
                                            aria-labelledby="dropdown-profile">
                                            <ul
                                                class="dropdown-menu pt-0 header-profile-dropdown dropdown-menu-end main-profile-menu">
                                                <!-- Profile Header -->
                                                <li>
                                                    <div
                                                        class="main-header-profile bg-primary menu-header-content text-white">
                                                        <div class="my-auto">
                                                            <h6 class="mb-0 leading-none text-white">
                                                                {{ Auth::user()->name }}</h6>
                                                            <span
                                                                class="text-[.6875rem] opacity-[0.7] leading-none">{{ Auth::user()->email }}</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item text-defaulttextcolor flex border-block-end"
                                                        href="{{ route('admin.dashboard') }}">
                                                        <i
                                                            class="bx bx-slider-alt text-[1.125rem] me-2 opacity-[0.7]"></i>Admin
                                                        Dashboard
                                                    </a>
                                                </li>

                                                <!-- Logout -->
                                                <li>
                                                    <form method="POST" action="{{ route('logout') }}">
                                                        @csrf
                                                        <button type="submit"
                                                            class="dropdown-item text-defaulttextcolor !rounded-bl-md !rounded-br-md flex">
                                                            <i
                                                                class="bx bx-log-out text-[1.125rem] me-2 opacity-[0.7]"></i>Sign
                                                            Out
                                                        </button>
                                                    </form>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                @else
                                    <a href="{{ route('login') }}" class="ti-btn ti-btn-primary !m-0">
                                        Sign In
                                    </a>

                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="ti-btn ti-btn-primary !m-0">
                                            Sign Up
                                        </a>
                                    @endif
                                @endauth
                            @endif
                        </div>
                    </nav>
                    <!-- End::nav -->
                </div>
                <!-- End::main-sidebar -->
            </div>
        </aside>
        <!-- End::app-sidebar -->


    </div>

    <!-- Back To Top -->
    <div class="scrollToTop">
        <span class="arrow"><i class="ri-arrow-up-s-fill  text-[1.25rem]"></i></span>
    </div>

    <div id="responsive-overlay"></div>
    <!-- popperjs -->
    <script src="{{ asset('backend/assets/libs/@popperjs/core/umd/popper.min.js') }}"></script>

    <!-- Color Picker JS -->
    <script src="{{ asset('backend/assets/libs/@simonwep/pickr/pickr.es5.min.js') }}"></script>

    <!-- Swiper JS -->
    <script src="{{ asset('backend/assets/libs/swiper/swiper-bundle.min.js') }}"></script>

    <!-- sidebar JS -->
    <script src="{{ asset('backend/assets/js/defaultmenu.js') }}"></script>
    {{--
    <!-- Internal Landing JS -->
    <script src="{{ asset('backend/assets/js/landing.js') }}"></script> --}}

    <!-- Switch JS -->
    <script src="{{ asset('backend/assets/js/switch.js') }}"></script>

    <!-- Preline JS -->
    <script src="{{ asset('backend/assets/libs/preline/preline.js') }}"></script>

    <!-- Simplebar JS -->
    <script src="{{ asset('backend/assets/libs/simplebar/simplebar.min.js') }}"></script>

    <script src="{{ asset('backend/assets/js/sticky.js') }}"></script>
</body>

</html>
