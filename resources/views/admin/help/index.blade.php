@extends('admin.layouts.master')

@section('title')
    Resort Kalinaw | Help & Support
@endsection

@push('scripts')
    <script src="{{ asset('backend/assets/js/dataTables.min.js') }}"></script>
@endpush

@section('contents')
    <div class="container mx-auto px-4 py-8">
        <!-- Page Header -->
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold text-blue-800 mb-4">Help & Support</h1>
            <p class="text-lg text-gray-600">We're here to help you with any questions or concerns about your stay at Resort
                Kalinaw.</p>
        </div>

        <!-- Main Content Grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12">
            <!-- FAQ Section -->
            <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition-shadow">
                <div class="flex items-center mb-4">
                    <div class="bg-blue-100 p-3 rounded-full mr-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-600" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h2 class="text-xl font-semibold text-gray-800">FAQs</h2>
                </div>
                <p class="text-gray-600 mb-4">Find answers to our most frequently asked questions about reservations,
                    amenities, and policies.</p>
                <a href="#faq" class="text-blue-600 font-medium hover:underline">Browse FAQs →</a>
            </div>

            <!-- Contact Section -->
            <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition-shadow">
                <div class="flex items-center mb-4">
                    <div class="bg-green-100 p-3 rounded-full mr-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-green-600" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                        </svg>
                    </div>
                    <h2 class="text-xl font-semibold text-gray-800">Contact Us</h2>
                </div>
                <p class="text-gray-600 mb-4">Reach out to our customer service team via phone, email, or live chat for
                    immediate assistance.</p>
                <a href="#contact" class="text-blue-600 font-medium hover:underline">Contact options →</a>
            </div>

            <!-- Feedback Section -->
            <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition-shadow">
                <div class="flex items-center mb-4">
                    <div class="bg-purple-100 p-3 rounded-full mr-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-purple-600" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h2 class="text-xl font-semibold text-gray-800">Feedback</h2>
                </div>
                <p class="text-gray-600 mb-4">Share your experience with us. We value your feedback to improve our services.
                </p>
                <a href="#feedback" class="text-blue-600 font-medium hover:underline">Provide feedback →</a>
            </div>
        </div>

        <!-- FAQ Section -->
        <div id="faq" class="mb-16">
            <h2 class="text-2xl font-bold text-gray-800 mb-6 pb-2 border-b border-gray-200">Frequently Asked Questions</h2>

            <div class="space-y-4">
                <!-- FAQ Item -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <button
                        class="faq-question w-full flex justify-between items-center p-4 text-left hover:bg-gray-50 transition-colors">
                        <span class="font-medium text-gray-800">What are the check-in and check-out times?</span>
                        <svg class="h-5 w-5 text-gray-500 transform transition-transform" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>
                    <div class="faq-answer px-4 pb-4 hidden">
                        <p class="text-gray-600">Check-in time is at 3:00 PM and check-out is at 11:00 AM. Early check-in
                            and late check-out may be available upon request and subject to availability.</p>
                    </div>
                </div>

                <!-- FAQ Item -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <button
                        class="faq-question w-full flex justify-between items-center p-4 text-left hover:bg-gray-50 transition-colors">
                        <span class="font-medium text-gray-800">Do you offer airport transfers?</span>
                        <svg class="h-5 w-5 text-gray-500 transform transition-transform" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>
                    <div class="faq-answer px-4 pb-4 hidden">
                        <p class="text-gray-600">Yes, we offer airport transfer services for an additional fee. Please
                            contact our concierge at least 48 hours before your arrival to arrange transportation.</p>
                    </div>
                </div>

                <!-- FAQ Item -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <button
                        class="faq-question w-full flex justify-between items-center p-4 text-left hover:bg-gray-50 transition-colors">
                        <span class="font-medium text-gray-800">What is your cancellation policy?</span>
                        <svg class="h-5 w-5 text-gray-500 transform transition-transform" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>
                    <div class="faq-answer px-4 pb-4 hidden">
                        <p class="text-gray-600">Cancellations made 7 days or more prior to arrival will receive a full
                            refund. Cancellations made within 7 days of arrival will forfeit the first night's rate.
                            No-shows will be charged the full reservation amount.</p>
                    </div>
                </div>

                <!-- FAQ Item -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <button
                        class="faq-question w-full flex justify-between items-center p-4 text-left hover:bg-gray-50 transition-colors">
                        <span class="font-medium text-gray-800">Are pets allowed at the resort?</span>
                        <svg class="h-5 w-5 text-gray-500 transform transition-transform" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>
                    <div class="faq-answer px-4 pb-4 hidden">
                        <p class="text-gray-600">We love pets! Resort Kalinaw is pet-friendly with certain restrictions. A
                            maximum of 2 pets per room is allowed with an additional cleaning fee. Please inform us in
                            advance if you're bringing pets.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contact Section -->
        <div id="contact" class="mb-16">
            <h2 class="text-2xl font-bold text-gray-800 mb-6 pb-2 border-b border-gray-200">Contact Us</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Contact Info -->
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h3 class="text-xl font-semibold text-gray-800 mb-4">Resort Kalinaw Contact Information</h3>

                    <div class="space-y-4">
                        <div class="flex items-start">
                            <div class="bg-blue-100 p-2 rounded-full mr-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-600" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-medium text-gray-800">Address</h4>
                                <p class="text-gray-600">Purok 4, Gayola Kidapawan City, North Cotabato</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="bg-green-100 p-2 rounded-full mr-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-600" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-medium text-gray-800">Phone</h4>
                                <p class="text-gray-600">+63 123 456 7890 (Front Desk)</p>
                                <p class="text-gray-600">+63 987 654 3210 (Reservations)</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="bg-purple-100 p-2 rounded-full mr-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-purple-600" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-medium text-gray-800">Email</h4>
                                <p class="text-gray-600">info@resortkalinaw.com (General Inquiries)</p>
                                <p class="text-gray-600">reservations@resortkalinaw.com (Bookings)</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h3 class="text-xl font-semibold text-gray-800 mb-4">Send Us a Message</h3>

                    <form>
                        <div class="mb-4">
                            <label for="name" class="block text-gray-700 font-medium mb-2">Your Name</label>
                            <input type="text" id="name"
                                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>

                        <div class="mb-4">
                            <label for="email" class="block text-gray-700 font-medium mb-2">Email Address</label>
                            <input type="email" id="email"
                                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>

                        <div class="mb-4">
                            <label for="subject" class="block text-gray-700 font-medium mb-2">Subject</label>
                            <select id="subject"
                                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                                <option value="">Select a subject</option>
                                <option value="reservation">Reservation Inquiry</option>
                                <option value="feedback">Feedback</option>
                                <option value="complaint">Complaint</option>
                                <option value="other">Other</option>
                            </select>
                        </div>

                        <div class="mb-4">
                            <label for="message" class="block text-gray-700 font-medium mb-2">Message</label>
                            <textarea id="message" rows="4"
                                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                        </div>

                        <button type="submit"
                            class="w-full bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-700 transition-colors">Send
                            Message</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Feedback Section -->
        <div id="feedback" class="mb-8">
            <h2 class="text-2xl font-bold text-gray-800 mb-6 pb-2 border-b border-gray-200">Share Your Feedback</h2>

            <div class="bg-white rounded-lg shadow-md p-6">
                <p class="text-gray-600 mb-6">We value your opinion! Please take a moment to share your experience at
                    Resort Kalinaw. Your feedback helps us improve our services.</p>

                <form>
                    <div class="mb-6">
                        <label class="block text-gray-700 font-medium mb-3">How would you rate your overall
                            experience?</label>
                        <div class="flex space-x-2">
                            <button type="button"
                                class="rating-btn p-2 rounded-full border border-gray-300 hover:bg-yellow-100 focus:outline-none"
                                data-rating="1">⭐</button>
                            <button type="button"
                                class="rating-btn p-2 rounded-full border border-gray-300 hover:bg-yellow-100 focus:outline-none"
                                data-rating="2">⭐⭐</button>
                            <button type="button"
                                class="rating-btn p-2 rounded-full border border-gray-300 hover:bg-yellow-100 focus:outline-none"
                                data-rating="3">⭐⭐⭐</button>
                            <button type="button"
                                class="rating-btn p-2 rounded-full border border-gray-300 hover:bg-yellow-100 focus:outline-none"
                                data-rating="4">⭐⭐⭐⭐</button>
                            <button type="button"
                                class="rating-btn p-2 rounded-full border border-gray-300 hover:bg-yellow-100 focus:outline-none"
                                data-rating="5">⭐⭐⭐⭐⭐</button>
                        </div>
                        <input type="hidden" id="rating" name="rating" value="">
                    </div>

                    <div class="mb-4">
                        <label for="feedback-comments" class="block text-gray-700 font-medium mb-2">Comments</label>
                        <textarea id="feedback-comments" rows="4"
                            class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                            placeholder="What did you like most about your stay? Is there anything we could improve?"></textarea>
                    </div>

                    <div class="mb-6">
                        <label class="inline-flex items-center">
                            <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600">
                            <span class="ml-2 text-gray-700">I would like to receive promotions and special offers from
                                Resort Kalinaw</span>
                        </label>
                    </div>

                    <button type="submit"
                        class="w-full md:w-auto bg-green-600 text-white py-2 px-6 rounded-md hover:bg-green-700 transition-colors">Submit
                        Feedback</button>
                </form>
            </div>
        </div>
    </div>

    <!-- JavaScript for FAQ and Rating -->
    <script>
        // FAQ toggle functionality
        document.querySelectorAll('.faq-question').forEach(button => {
            button.addEventListener('click', () => {
                const answer = button.nextElementSibling;
                const icon = button.querySelector('svg');

                // Toggle answer visibility
                answer.classList.toggle('hidden');

                // Rotate icon
                icon.classList.toggle('rotate-180');

                // Close other open FAQs
                document.querySelectorAll('.faq-question').forEach(otherButton => {
                    if (otherButton !== button) {
                        otherButton.nextElementSibling.classList.add('hidden');
                        otherButton.querySelector('svg').classList.remove('rotate-180');
                    }
                });
            });
        });

        // Rating functionality
        document.querySelectorAll('.rating-btn').forEach(button => {
            button.addEventListener('click', () => {
                const rating = button.getAttribute('data-rating');
                document.getElementById('rating').value = rating;

                // Highlight selected rating
                document.querySelectorAll('.rating-btn').forEach(btn => {
                    if (parseInt(btn.getAttribute('data-rating')) <= parseInt(rating)) {
                        btn.classList.add('bg-yellow-200', 'border-yellow-400');
                    } else {
                        btn.classList.remove('bg-yellow-200', 'border-yellow-400');
                    }
                });
            });
        });
    </script>
@endsection
