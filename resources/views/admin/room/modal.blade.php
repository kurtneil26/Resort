@extends('admin.layouts.master')

@section('title')
    Resort Kalinaw | Reservation Form
@endsection

@push('scripts')
    <script>
        // Package selection functionality
        function selectPackage(packageType, packageName, packagePrice) {
            document.getElementById('package-input').value = packageType;
            document.getElementById('selected-package-display').innerText = `${packageName} (₱${packagePrice}/day)`;
            document.getElementById('packagesModal').classList.add('hidden');
        }

        function openPackagesModal() {
            document.getElementById('packagesModal').classList.remove('hidden');
        }

        function updateTotalGuests() {
            const adults = parseInt(document.querySelector('input[name="guests_adults"]').value) || 0;
            const children = parseInt(document.querySelector('input[name="guests_children"]').value) || 0;
            document.getElementById('total-guests-display').textContent = adults + children;
        }

        // Form submission - SIMPLEST WORKING VERSION
        document.getElementById('reservationForm').addEventListener('submit', function(e) {
            // Let the form submit normally - this should redirect to receipt
            // No need for preventDefault() or AJAX unless you have special requirements
        });
    </script>
@endpush
@section('contents')
    <!-- Start::main-content -->
    <div class="main-content">
        <!-- Page Header -->
        <div class="md:flex block items-center justify-between mb-6 mt-[2rem] page-header-breadcrumb">
            <div class="my-auto">
                <h5 class="page-title text-[1.3125rem] font-medium text-defaulttextcolor mb-0">Reservation Form</h5>
                <nav>
                    <ol class="flex items-center whitespace-nowrap min-w-0">
                        <li class="text-[12px]">
                            <a class="flex items-center text-primary hover:text-primary" href="javascript:void(0);">
                                Reservations
                                <i
                                    class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-textmuted rtl:rotate-180"></i>
                            </a>
                        </li>
                        <li class="text-[12px]">
                            <a class="flex items-center text-textmuted" href="javascript:void(0);">
                                New Reservation
                            </a>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- Page Header Close -->

        <!-- Start::reservation-form -->
        <div class="grid grid-cols-12 gap-6">
            <div class="col-span-12">
                <div class="box">
                    <div class="box-header">
                        <h5 class="box-title">Customer & Booking Information</h5>
                    </div>
                    <div class="box-body">
                        <form id="reservationForm" action="{{ route('admin.admin.receipt.store') }}" method="POST">
                            @csrf

                            <!-- Hidden room type field -->
                            <input type="hidden" name="room_type" value="{{ request('room_type') }}">

                            <!-- Personal Information Section -->
                            <div class="mb-8">
                                <h6 class="text-lg font-medium text-defaulttextcolor mb-4 border-b pb-2">Personal
                                    Information</h6>
                                <div class="grid lg:grid-cols-2 gap-6">
                                    <div class="space-y-2">
                                        <label class="ti-form-label dark:text-defaulttextcolor/70 mb-0">First Name *</label>
                                        <input type="text" name="first_name" class="ti-form-input rounded-sm"
                                            placeholder="First name" required>
                                    </div>
                                    <div class="space-y-2">
                                        <label class="ti-form-label dark:text-defaulttextcolor/70 mb-0">Last Name *</label>
                                        <input type="text" name="last_name" class="ti-form-input rounded-sm"
                                            placeholder="Last name" required>
                                    </div>
                                    <div class="space-y-2">
                                        <label class="ti-form-label dark:text-defaulttextcolor/70 mb-0">Phone Number
                                            *</label>
                                        <input type="tel" name="phone" class="ti-form-input rounded-sm"
                                            placeholder="+63 912 345 6789"
                                            pattern="\+?\d{0,3}[\s-]?\d{3}[\s-]?\d{3}[\s-]?\d{4}" required>
                                    </div>
                                    <div class="space-y-2">
                                        <label class="ti-form-label dark:text-defaulttextcolor/70 mb-0">Email Address
                                            *</label>
                                        <input type="email" name="email" class="ti-form-input rounded-sm"
                                            placeholder="your@email.com" required>
                                    </div>
                                    <div class="space-y-2">
                                        <label class="ti-form-label dark:text-defaulttextcolor/70 mb-0">Date of
                                            Birth</label>
                                        <input type="date" name="birth_date"
                                            class="ti-form-input rounded-sm flatpickr-input">
                                    </div>
                                    <div class="space-y-2">
                                        <label class="ti-form-label dark:text-defaulttextcolor/70 mb-0">Gender</label>
                                        <select name="gender" class="ti-form-select rounded-sm">
                                            <option value="">Select Gender</option>
                                            <option value="female">Female</option>
                                            <option value="male">Male</option>
                                            <option value="other">Other</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="my-5">
                                    <div class="space-y-2">
                                        <label class="ti-form-label dark:text-defaulttextcolor/70 mb-0">Address *</label>
                                        <input type="text" name="address" class="ti-form-input rounded-sm"
                                            placeholder="Street Address" required>
                                    </div>
                                </div>

                                <div class="grid lg:grid-cols-3 gap-6">
                                    <div class="space-y-2">
                                        <label class="ti-form-label dark:text-defaulttextcolor/70 mb-0">City *</label>
                                        <input type="text" name="city" class="ti-form-input rounded-sm"
                                            placeholder="City" required>
                                    </div>
                                    <div class="space-y-2">
                                        <label class="ti-form-label dark:text-defaulttextcolor/70 mb-0">State/Province
                                            *</label>
                                        <input type="text" name="state" class="ti-form-input rounded-sm"
                                            placeholder="State/Province" required>
                                    </div>
                                    <div class="space-y-2">
                                        <label class="ti-form-label dark:text-defaulttextcolor/70 mb-0">Postal Code
                                            *</label>
                                        <input type="text" name="postal_code" class="ti-form-input rounded-sm"
                                            placeholder="Postal Code" required>
                                    </div>
                                </div>
                            </div>

                            <!-- Booking Information Section -->
                            <div class="mb-8">
                                <h6 class="text-lg font-medium text-defaulttextcolor mb-4 border-b pb-2">Booking Information
                                </h6>
                                <div class="grid lg:grid-cols-2 gap-6">
                                    <div class="space-y-2">
                                        <label class="ti-form-label dark:text-defaulttextcolor/70 mb-0">Check-In Date
                                            *</label>
                                        <input type="date" name="check_in"
                                            class="ti-form-input rounded-sm flatpickr-input" required>
                                    </div>
                                    <div class="space-y-2">
                                        <label class="ti-form-label dark:text-defaulttextcolor/70 mb-0">Check-Out Date
                                            *</label>
                                        <input type="date" name="check_out"
                                            class="ti-form-input rounded-sm flatpickr-input" required>
                                    </div>
                                    <div class="space-y-2">
                                        <label class="ti-form-label dark:text-defaulttextcolor/70 mb-0">Room Type *</label>
                                        <div class="ti-form-input rounded-sm bg-gray-100">
                                            @switch(request('room_type'))
                                                @case('deluxe')
                                                    Deluxe Room
                                                @break

                                                @case('suite')
                                                    Suite Room
                                                @break

                                                @case('villa')
                                                    Villa Room
                                                @break

                                                @default
                                                    No room type selected
                                            @endswitch
                                        </div>
                                    </div>
                                    <div class="space-y-2">
                                        <label class="ti-form-label dark:text-defaulttextcolor/70 mb-0">Total Guests
                                            *</label>
                                        <div class="ti-form-input rounded-sm bg-gray-100 py-2" id="total-guests-display">0
                                        </div>
                                    </div>
                                </div>

                                <div class="grid lg:grid-cols-2 gap-6 mt-4">
                                    <div class="space-y-2">
                                        <label class="ti-form-label dark:text-defaulttextcolor/70 mb-0">Guests 15+ Years
                                            *</label>
                                        <input type="number" name="guests_adults" class="ti-form-input rounded-sm"
                                            min="0" max="10" required onchange="updateTotalGuests()">
                                    </div>
                                    <div class="space-y-2">
                                        <label class="ti-form-label dark:text-defaulttextcolor/70 mb-0">Guests 14 Years &
                                            Below
                                            *</label>
                                        <input type="number" name="guests_children" class="ti-form-input rounded-sm"
                                            min="0" max="10" required onchange="updateTotalGuests()">
                                    </div>
                                </div>

                                <div class="grid lg:grid-cols-2 gap-6 mt-4">
                                    <div class="space-y-2">
                                        <label class="ti-form-label dark:text-defaulttextcolor/70 mb-0">Selected
                                            Package</label>
                                        <div id="selected-package-display" class="ti-form-input rounded-sm bg-gray-100">
                                            No package selected
                                        </div>
                                        <input type="hidden" name="package" id="package-input">
                                    </div>
                                    <div class="space-y-2">
                                        <label class="ti-form-label dark:text-defaulttextcolor/70 mb-0">View
                                            Packages</label>
                                        <button type="button" onclick="openPackagesModal()"
                                            class="ti-btn ti-btn-primary w-full">
                                            Browse Packages
                                        </button>
                                    </div>
                                </div>

                                <div class="my-5">
                                    <div class="space-y-2">
                                        <label class="ti-form-label dark:text-defaulttextcolor/70 mb-0">Special
                                            Requests</label>
                                        <textarea name="special_requests" class="ti-form-input rounded-sm" rows="3"
                                            placeholder="Any special requests?"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="flex justify-end mt-6 gap-4">
                                <button type="reset"
                                    class="ti-btn ti-btn-danger-full ti-btn-wave me-[0.375rem]">Reset</button>
                                <button type="submit" class="ti-btn ti-btn-success-full ti-btn-wave">
                                    Submit Reservation
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End::reservation-form -->

        <!-- Packages Modal -->
        <div id="packagesModal" class="hidden fixed inset-0 z-50 overflow-y-auto">
            <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                <!-- Background overlay -->
                <div class="fixed inset-0 transition-opacity" aria-hidden="true">
                    <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
                </div>

                <!-- Modal content -->
                <div
                    class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-6xl sm:w-full">
                    <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                        <div class="sm:flex sm:items-start">
                            <div class="mt-3 text-center sm:mt-0 sm:text-left w-full">
                                <div class="flex justify-between items-center border-b pb-3">
                                    <h3 class="text-2xl leading-6 font-bold text-gray-900">
                                        Resort Kalinaw Packages
                                    </h3>
                                    <button type="button"
                                        onclick="document.getElementById('packagesModal').classList.add('hidden')"
                                        class="text-red-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 rounded-md p-1">
                                        <span class="sr-only">Close</span>
                                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                            aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M6 18L18 6M6 6l12 12" />
                                        </svg>
                                    </button>
                                </div>

                                <div class="mt-6">
                                    <div class="sm:grid grid-cols-12 gap-6 max-w-6xl mx-auto">
                                        <!-- Special Event Package -->
                                        <div class="lg:col-span-4 col-span-12">
                                            <div
                                                class="relative p-6 shadow border dark:border-white/10 text-center rounded-sm bg-white dark:bg-bodybg">
                                                <div class="absolute top-0 inset-x-0 h-0.5 bg-warning" aria-hidden="true">
                                                </div>
                                                <h3
                                                    class="mb-4 text-2xl font-semibold text-gray-800 dark:text-white text-warning">
                                                    Special Event Packages
                                                </h3>
                                                <p class="text-gray-500 dark:text-white/70">Ideal for birthdays, weddings,
                                                    reunions, and
                                                    corporate gatherings.</p>
                                                <div class="flex justify-center my-7 items-baseline">
                                                    <span
                                                        class="me-2 text-5xl font-bold text-gray-800 dark:text-white">₱15,000.00</span>
                                                    <span class="text-gray-500 dark:text-white/70 font-medium"> /
                                                        Day</span>
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
                                                    <button type="button"
                                                        onclick="selectPackage('special_event', 'Special Event Package', '15,000.00')"
                                                        class="ti-btn w-full p-3 ti-btn-warning">Choose Package</button>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- All Inclusive Package -->
                                        <div
                                            class="lg:col-span-4 col-span-12 lg:scale-110 z-10 bg-white dark:bg-bodybg shadow-lg">
                                            <div
                                                class="relative p-6 shadow border dark:border-white/10 text-center rounded-sm bg-white dark:bg-bodybg">
                                                <div class="absolute top-0 inset-x-0 h-0.5 bg-primary" aria-hidden="true">
                                                </div>
                                                <h3
                                                    class="mb-4 text-2xl font-semibold text-gray-800 dark:text-white text-primary">
                                                    All Inclusive Packages
                                                </h3>
                                                <p class="text-gray-500 dark:text-white/70">Perfect for guests who want a
                                                    hassle-free
                                                    and premium resort experience.</p>
                                                <div class="flex justify-center my-7 items-baseline">
                                                    <span
                                                        class="me-2 text-5xl font-bold text-gray-800 dark:text-white">₱2,000.00</span>
                                                    <span class="text-gray-500 dark:text-white/70 font-medium"> /
                                                        Day</span>
                                                </div>
                                                <ul class="p-0 my-4 space-y-3">
                                                    <li class="flex space-x-4 rtl:space-x-reverse">
                                                        <span><i class="ri ri-check-line text-success text-xl"></i></span>
                                                        <span>Full access to the resort’s amenities (swimming pool,
                                                            recreational areas,
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
                                                    <button type="button"
                                                        onclick="selectPackage('all_inclusive', 'All Inclusive Package', '2,000.00')"
                                                        class="ti-btn w-full p-3 ti-btn-primary">Choose Package</button>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Family Fun Package -->
                                        <div class="lg:col-span-4 col-span-12">
                                            <div
                                                class="relative p-6 shadow border dark:border-white/10 text-center rounded-sm bg-white dark:bg-bodybg">
                                                <div class="absolute top-0 inset-x-0 h-0.5 bg-danger" aria-hidden="true">
                                                </div>
                                                <h3
                                                    class="mb-4 text-2xl font-semibold text-gray-800 dark:text-white text-danger">
                                                    Family Fun Packages
                                                </h3>
                                                <p class="text-gray-500 dark:text-white/70">Designed for families looking
                                                    to enjoy
                                                    quality time together.</p>
                                                <div class="flex justify-center my-7 items-baseline">
                                                    <span
                                                        class="me-2 text-5xl font-bold text-gray-800 dark:text-white">₱3,500.00</span>
                                                    <span class="text-gray-500 dark:text-white/70 font-medium"> /
                                                        Day</span>
                                                </div>
                                                <ul class="p-0 my-4 space-y-3">
                                                    <li class="flex space-x-4 rtl:space-x-reverse">
                                                        <span><i class="ri ri-check-line text-success text-xl"></i></span>
                                                        <span>Day-use or overnight stay in a family-sized
                                                            accommodation.</span>
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
                                                    <button type="button"
                                                        onclick="selectPackage('family_fun', 'Family Fun Package', '3,500.00')"
                                                        class="ti-btn w-full p-3 ti-btn-danger">Choose Package</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
