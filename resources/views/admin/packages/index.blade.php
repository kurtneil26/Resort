@extends('admin.layouts.master')

@section('title')
    Resort Kalinaw | Packages
@endsection

@push('scripts')
    <script src="{{ asset('backend/assets/js/dataTables.min.js') }}"></script>
@endpush

@section('contents')
    <!-- Start::row-3 -->
    <div class="">
        <div class="box-body">
            <div class="text-center">
                <h2 class="font-semibold text-2xl">Package Offer by Resort Kalinaw !</h2>
                <p class="text-gray-500 dark:text-white/70 mb-4">We have several packages offered by our Resort Kalinaw.</p>
                <div class="flex justify-center !mb-0">

                </div>
            </div>

            <div class="mt-3">
                <div id="pricing-style-1" role="tabpanel" aria-labelledby="pricing-1">
                    <div class="py-14">
                        <div class="sm:grid grid-cols-12 xl:space-y-0 space-y-6 max-w-6xl mx-auto">
                            <div class="lg:col-span-4 col-span-12">
                                <div
                                    class="relative p-6 shadow border dark:border-white/10 text-center rounded-sm  bg-white dark:bg-bodybg">
                                    <div class="absolute top-0 inset-x-0 h-0.5 bg-warning" aria-hidden="true"></div>
                                    <h3 class="mb-4 text-2xl font-semibold text-gray-800 dark:text-white text-warning">
                                        Special Event Packages
                                    </h3>
                                    <p class="text-gray-500 dark:text-white/70">Ideal for birthdays, weddings, reunions, and
                                        corporate gatherings.</p>
                                    <div class="flex justify-center my-7 items-baseline">
                                        <span class="me-2 text-5xl font-bold text-gray-800 dark:text-white">$10</span>
                                        <span class="text-gray-500 dark:text-white/70 font-medium"> / Day</span>
                                    </div>
                                    <ul class="p-0 my-4 space-y-3">
                                        <li class="flex space-x-4 rtl:space-x-reverse">
                                            <span><i class="ri ri-check-line text-success text-xl"></i></span>
                                            <span>Exclusive venue rental based on the number of guests.</span>
                                        </li>
                                        <li class="flex space-x-4 rtl:space-x-reverse">
                                            <span><i class="ri ri-check-line text-success text-xl"></i></span>
                                            <span>Customized event setup and decorations.</span>
                                        </li>
                                        <li class="flex space-x-4 rtl:space-x-reverse">
                                            <span><i class="ri ri-check-line text-success text-xl"></i></span>
                                            <span>Catering services (buffet or plated meals).</span>
                                        </li>
                                        <li class="flex space-x-4 rtl:space-x-reverse">
                                            <span><i class="ri ri-check-line text-success text-xl"></i></span>
                                            <span>Complimentary use of resort amenities for event guests.</span>
                                        </li>
                                        <li class="flex space-x-4 rtl:space-x-reverse">
                                            <span><i class="ri ri-check-line text-success text-xl"></i></span>
                                            <span>Event coordinator assistance.</span>
                                        </li>
                                    </ul>
                                    <div class="text-center mt-2">
                                        <div class="ti-btn w-full p-3 ti-btn-warning">Choose Packages</div>
                                    </div>
                                </div>
                            </div>
                            <div class="lg:col-span-4 col-span-12 lg:scale-110 z-10 bg-white dark:bg-bodybg shadow-lg">
                                <div
                                    class="relative p-6 shadow border dark:border-white/10 text-center rounded-sm  bg-white dark:bg-bodybg">
                                    <div class="absolute top-0 inset-x-0 h-0.5 bg-primary" aria-hidden="true"></div>
                                    <h3 class="mb-4 text-2xl font-semibold text-gray-800 dark:text-white text-primary">
                                        All Inclusive Packages</h3>
                                    <p class="text-gray-500 dark:text-white/70">Perfect for guests who want a hassle-free
                                        and premium resort experience.</p>
                                    <div class="flex justify-center my-7 items-baseline">
                                        <span class="me-2 text-5xl font-bold text-gray-800 dark:text-white">$50</span>
                                        <span class="text-gray-500 dark:text-white/70 font-medium"> / Day</span>
                                    </div>
                                    <ul class="p-0 my-4 space-y-3">
                                        <li class="flex space-x-4 rtl:space-x-reverse">
                                            <span><i class="ri ri-check-line text-success text-xl"></i></span>
                                            <span>Full access to the resort’s amenities (swimming pool, recreational areas,
                                                and lounge spaces).</span>
                                        </li>
                                        <li class="flex space-x-4 rtl:space-x-reverse">
                                            <span><i class="ri ri-check-line text-success text-xl"></i></span>
                                            <span>Complimentary breakfast, lunch, and dinner.</span>
                                        </li>
                                        <li class="flex space-x-4 rtl:space-x-reverse">
                                            <span><i class="ri ri-check-line text-success text-xl"></i></span>
                                            <span>Free access to resort activities</span>
                                        </li>
                                        <li class="flex space-x-4 rtl:space-x-reverse">
                                            <span><i class="ri ri-check-line text-success text-xl"></i></span>
                                            <span>15% discount on additional services </span>
                                        </li>
                                        <li class="flex space-x-4 rtl:space-x-reverse">
                                            <span><i class="ri ri-check-line text-success text-xl"></i></span>
                                            <span>Day-use or overnight stay</span>
                                        </li>
                                    </ul>
                                    <div class="text-center mt-2">
                                        <div class="ti-btn w-full p-3 ti-btn-primary">Choose Packages</div>
                                    </div>
                                </div>
                            </div>
                            <div class="lg:col-span-4 col-span-12">
                                <div
                                    class="relative p-6 shadow border dark:border-white/10 text-center rounded-sm  bg-white dark:bg-bodybg">
                                    <div class="absolute top-0 inset-x-0 h-0.5 bg-danger" aria-hidden="true"></div>
                                    <h3 class="mb-4 text-2xl font-semibold text-gray-800 dark:text-white text-danger">
                                        Family Fun Packages</h3>
                                    <p class="text-gray-500 dark:text-white/70">Designed for families looking to enjoy
                                        quality time together.</p>
                                    <div class="flex justify-center my-7 items-baseline">
                                        <span class="me-2 text-5xl font-bold text-gray-800 dark:text-white">$25</span>
                                        <span class="text-gray-500 dark:text-white/70 font-medium"> / Day</span>
                                    </div>
                                    <ul class="p-0 my-4 space-y-3">
                                        <li class="flex space-x-4 rtl:space-x-reverse">
                                            <span><i class="ri ri-check-line text-success text-xl"></i></span>
                                            <span>Day-use or overnight stay in a family-sized accommodation.</span>
                                        </li>
                                        <li class="flex space-x-4 rtl:space-x-reverse">
                                            <span><i class="ri ri-check-line text-success text-xl"></i></span>
                                            <span>Complimentary breakfast for the whole family.</span>
                                        </li>
                                        <li class="flex space-x-4 rtl:space-x-reverse">
                                            <span><i class="ri ri-check-line text-success text-xl"></i></span>
                                            <span>Fun activities for kids (mini-games, play areas, etc.).</span>
                                        </li>
                                        <li class="flex space-x-4 rtl:space-x-reverse">
                                            <span><i class="ri ri-check-line text-success text-xl"></i></span>
                                            <span>10% discount on dining services.</span>
                                        </li>
                                        <li class="flex space-x-4 rtl:space-x-reverse">
                                            <span><i class="ri ri-check-line text-success text-xl"></i></span>
                                            <span>Free souvenir for kids.</span>
                                        </li>
                                    </ul>
                                    <div class="text-center mt-2">
                                        <div class="ti-btn w-full p-3 ti-btn-danger">Choose Packages</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End::row-3 -->
@endsection
