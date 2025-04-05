<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" data-vertical-style="overlay" class="light"
    data-header-styles="light" data-menu-styles="light" data-toggled="close">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Valex - Forgot Password </title>
    <meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
    <meta name="Author" content="Spruko Technologies Private Limited">
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('backend/assets/images/brand-logos/favicon.ico') }}" type="image/x-icon">

    <!-- Main Theme Js -->
    <script src="{{ asset('backend/assets/js/authentication-main.js') }}"></script>

    <!-- Style Css -->
    <link rel="stylesheet" href="{{ asset('backend/assets/css/style.css') }}">

    <!-- Simplebar Css -->
    <link id="style" href="{{ asset('backend/assets/libs/simplebar/simplebar.min.css') }}" rel="stylesheet">

    <!-- Color Picker Css -->
    <link rel="stylesheet" href="{{ asset('backend/assets/libs/@simonwep/pickr/themes/nano.min.css') }}">

    <!-- Swiper Css -->
    <link rel="stylesheet" href="{{ asset('backend/assets/libs/swiper/swiper-bundle.min.css') }}">


</head>

<body class="bg-white dark:!bg-bodybg">
    <div class="container">
        <div
            class="grid grid-cols-12 authentication authentication-basic items-center h-full text-defaultsize text-defaulttextcolor">
            <div class="xxl:col-span-4 xl:col-span-4 lg:col-span-4 md:col-span-3 sm:col-span-2"></div>
            <div class="xxl:col-span-4 xl:col-span-4 lg:col-span-4 md:col-span-6 sm:col-span-8 col-span-12">
                <div class="my-[2.5rem] flex justify-center">
                    <a href="index.html">
                        <img src="{{ 'backend/assets/images/brand-logos/desktop-logo.png' }}" alt="logo"
                            class="desktop-logo">
                        <img src="{{ 'backend/assets/images/brand-logos/desktop-dark.png' }}" alt="logo"
                            class="desktop-dark">
                    </a>
                </div>
                <div class="box">
                    <div class="box-body !p-[3rem]">
                        <p
                            class="h5 font-semibold mb-2 text-center !text-defaulttextcolor dark:!text-defaulttextcolor/85">
                            Reset Password</p>
                        <p class="mb-4 text-[#8c9097] opacity-[0.7] font-normal text-center">Forgot your password? No
                            problem. Just let us know your email address and we will email you a password reset link
                            that will allow you to choose a new one.</p>

                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf
                            <div class="grid grid-cols-12 gap-y-4">
                                <div class="xl:col-span-12 col-span-12">
                                    <label for="signin-username" class="form-label text-default">Email Address</label>
                                    <input type="email" class="form-control form-control-lg w-full !rounded-md"
                                        name="email" id="signin-username" placeholder="Email Address">
                                </div>
                                <div class="xl:col-span-12 col-span-12 grid">
                                    <button type="submit"
                                        class="ti-btn ti-btn-lg bg-primary !border-0 text-white !font-medium">Email
                                        Password Reset Link</button>

                                    </button>
                                </div>
                            </div>
                        </form>

                        <div class="text-center">
                            <p class="text-[0.75rem] text-[#8c9097] mt-4">Already have an account? <a
                                    href="{{ route('login') }}" class="text-primary">Sign In</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="xxl:col-span-4 xl:col-span-4 lg:col-span-4 md:col-span-3 sm:col-span-2"></div>
        </div>
    </div>

    <!-- Show Password JS -->
    <script src="{{ asset('backend/assets/js/show-password.js') }}"></script>

</body>

</html>
