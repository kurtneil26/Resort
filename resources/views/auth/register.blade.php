<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" data-vertical-style="overlay" class="light"
    data-header-styles="light" data-menu-styles="light" data-toggled="close">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Valex - Sign In </title>
    <meta name="description"
        content="A Tailwind CSS admin template is a pre-designed web page for an admin dashboard. Optimizing it for SEO includes using meta descriptions and ensuring it's responsive and fast-loading.">
    <meta name="keywords"
        content="dashboard,admin dashboard,template dashboard,html,html dashboard,admin dashboard template,admin template,tailwind ui,admin panel,html and css,html admin template,tailwind framework,html css javascript,tailwind css dashboard,dashboard html css,admin,template admin panel,dashboard html template">


    <!-- Favicon -->
    <link rel="icon" href="{{ asset('backend/assets/images/brand-logos/favicon.ico') }}" type="image/x-icon">

    <!-- Style Css -->
    <link rel="stylesheet" href="{{ asset('backend/assets/css/style.css') }}">

    <!-- Simplebar Css -->
    <link id="style" href="{{ asset('backend/assets/libs/simplebar/simplebar.min.css') }}" rel="stylesheet">

    <!-- Color Picker Css -->
    <link rel="stylesheet" href="{{ asset('backend/assets/libs/@simonwep/pickr/themes/nano.min.css') }}">

    <!-- Swiper Css -->
    <link rel="stylesheet" href="{{ asset('backend/assets/libs/swiper/swiper-bundle.min.css') }}">


</head>


<body>

    <div class="container">
        <div
            class="grid grid-cols-12 authentication authentication-basic items-center h-full text-defaultsize text-defaulttextcolor">
            <div class="xxl:col-span-4 xl:col-span-4 lg:col-span-4 md:col-span-3 sm:col-span-2"></div>
            <div class="xxl:col-span-4 xl:col-span-4 lg:col-span-4 md:col-span-6 sm:col-span-8 col-span-12">
                <div class="my-[2.5rem] flex justify-center">
                    <a href="index.html">
                        <img src="{{ asset('backend/assets/images/brand-logos/desktop-logo.png') }}" alt="logo"
                            class="desktop-logo">
                        <img src="{{ asset('backend/assets/images/brand-logos/desktop-dark.png') }}" alt="logo"
                            class="desktop-dark">
                    </a>
                </div>
                <div class="box">
                    <div class="box-body !p-[3rem]">
                        <p
                            class="h5 font-semibold mb-2 text-center !text-defaulttextcolor dark:!text-defaulttextcolor/85">
                            Sign Up</p>
                        <p class="mb-4 text-[#8c9097] opacity-[0.7] font-normal text-center">Welcome & Join us by
                            creating a free account !</p>

                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="grid grid-cols-12 gap-y-4">
                                <!-- Name -->
                                <div class="xl:col-span-12 col-span-12">
                                    <label for="name" class="form-label text-default">Username</label>
                                    <input type="text" class="form-control form-control-lg w-full !rounded-md"
                                        name="name" id="name" value="{{ old('name') }}"
                                        placeholder="User Name" required autofocus autocomplete="name">
                                    @error('name')
                                        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                                    @enderror
                                </div>

                                <!-- Email -->
                                <div class="xl:col-span-12 col-span-12">
                                    <label for="email" class="form-label text-default">Email</label>
                                    <input type="email" class="form-control form-control-lg w-full !rounded-md"
                                        name="email" id="email" value="{{ old('email') }}" placeholder="Email"
                                        required autocomplete="username">
                                    @error('email')
                                        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                                    @enderror
                                </div>

                                <!-- Password -->
                                <div class="xl:col-span-12 col-span-12">
                                    <label for="password" class="form-label text-default">Password</label>
                                    <div class="input-group">
                                        <input type="password"
                                            class="form-control form-control-lg !rounded-tl-sm !rounded-bl-sm rtl:!rounded-tl-none rtl:!rounded-bl-none rtl:!rounded-tr-sm rtl:!rounded-br-sm"
                                            name="password" id="password" placeholder="Password" required
                                            autocomplete="new-password">
                                        <button
                                            class="ti-btn ti-btn-light !mb-0 !rounded-tr-sm !rounded-br-sm rtl:!rounded-tr-none rtl:!rounded-br-none rtl:!rounded-tl-sm rtl:!rounded-bl-sm"
                                            onclick="createpassword('password', this)" type="button"
                                            id="button-addon2">
                                            <i class="ri-eye-off-line align-middle"></i>
                                        </button>
                                    </div>
                                    @error('password')
                                        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                                    @enderror
                                </div>

                                <!-- Confirm Password -->
                                <div class="xl:col-span-12 col-span-12">
                                    <label for="password_confirmation" class="form-label text-default">Confirm
                                        Password</label>
                                    <div class="input-group">
                                        <input type="password"
                                            class="form-control form-control-lg !rounded-tl-sm !rounded-bl-sm rtl:!rounded-tl-none rtl:!rounded-bl-none rtl:!rounded-tr-sm rtl:!rounded-br-sm"
                                            name="password_confirmation" id="password_confirmation"
                                            placeholder="Confirm Password" required autocomplete="new-password">
                                        <button
                                            class="ti-btn ti-btn-light !mb-0 !rounded-tr-sm !rounded-br-sm rtl:!rounded-tr-none rtl:!rounded-br-none rtl:!rounded-tl-sm rtl:!rounded-bl-sm"
                                            onclick="createpassword('password_confirmation', this)" type="button"
                                            id="button-addon21">
                                            <i class="ri-eye-off-line align-middle"></i>
                                        </button>
                                    </div>
                                    @error('password_confirmation')
                                        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                                    @enderror
                                </div>

                                <!-- Terms and Conditions -->
                                <div class="xl:col-span-12 col-span-12">
                                    <div class="mt-4">
                                        <div class="form-check flex items-center gap-2">
                                            <input class="form-check-input me-1" type="checkbox" value=""
                                                id="defaultCheck1" required>
                                            <label class="form-check-label text-[#8c9097] font-normal block"
                                                for="defaultCheck1">
                                                By creating an account, you agree to our
                                                <a href="terms.html" class="text-success"><u>Terms &
                                                        Conditions</u></a> and
                                                <a href="#" class="text-success"><u>Privacy Policy</u></a>.
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <!-- Register Button -->
                                <div class="xl:col-span-12 col-span-12 grid">
                                    <button type="submit"
                                        class="ti-btn ti-btn-lg bg-primary text-white !font-medium dark:border-defaultborder/10">
                                        Create Account
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
