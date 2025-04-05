@extends('admin.layouts.master')

@section('title')
    Resort Kalinaw | Amenities Gallery
@endsection

@push('scripts')
    <script src="{{ asset('backend/assets/js/dataTables.min.js') }}"></script>
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize main gallery swiper
            const gallerySwiper = new Swiper('.swiper-preview', {
                loop: true,
                spaceBetween: 10,
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                thumbs: {
                    swiper: {
                        el: '.swiper-view',
                        slidesPerView: 4,
                        spaceBetween: 10,
                        freeMode: true,
                        watchSlidesProgress: true,
                    },
                },
            });
        });
    </script>
@endpush

@push('styles')
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <style>
        .gallery-zoom-out {
            transform: scale(0.90);
            transform-origin: top center;
            width: 117.65%;
            /* 100/0.85 */
            margin-left: -8.8%;
            /* (117.65-100)/2 */
            margin-bottom: -2rem;
            /* Compensate for reduced height */
        }

        .swiper-preview {
            height: 28rem;
            /* Slightly larger than original h-96 (24rem) */
        }

        .swiper-view {
            height: 6rem;
            /* Original h-24 (6rem) */
        }

        .box-header {
            margin-bottom: -1rem;
            /* Adjust header spacing */
        }
    </style>
@endpush

@section('contents')
    <!-- Start::row-3 -->
    <div class="grid grid-cols-12 gap-6 gallery-zoom-out">
        <div class="xl:col-span-12 col-span-12">
            <div class="box">
                <div class="box-header flex items-center justify-center min-h-[100px]">
                    <h1 class="text-6xl font-bold text-center">Amenities</h1>
                </div>
                <div class="box-body p-4">
                    <!-- Main Slider -->
                    <div class="swiper swiper-preview h-full w-full rounded-lg overflow-hidden">
                        <div class="swiper-wrapper">
                            <!-- Slide 1 -->
                            <div class="swiper-slide">
                                <img class="w-full h-full object-cover"
                                    src="{{ asset('backend/assets/images/gallery/deluxe-room-king-2-2000px_wide.jpg') }}"
                                    alt="Deluxe Room">
                            </div>
                            <!-- Slide 2 -->
                            <div class="swiper-slide">
                                <img class="w-full h-full object-cover"
                                    src="{{ asset('backend/assets/images/gallery/images.jpg') }}" alt="Another Room">
                            </div>
                            <!-- Slide 3 -->
                            <div class="swiper-slide">
                                <img class="w-full h-full object-cover"
                                    src="{{ asset('backend/assets/images/gallery/Superior-DeLuxe-Room_TB-1024x682.jpg') }}"
                                    alt="Resort View">
                            </div>
                            <!-- Slide 4 -->
                            <div class="swiper-slide">
                                <img class="w-full h-full object-cover"
                                    src="{{ asset('backend/assets/images/gallery/Deluxe Twin 1074 2.jpg') }}"
                                    alt="Pool Area">
                            </div>
                        </div>
                        <!-- Navigation buttons -->
                        <div class="swiper-button-next bg-black bg-opacity-50 w-10 h-10 rounded-full text-white"></div>
                        <div class="swiper-button-prev bg-black bg-opacity-50 w-10 h-10 rounded-full text-white"></div>
                    </div>

                    <!-- Thumbnail Slider -->
                    <div class="swiper swiper-view mt-4 h-full">
                        <div class="swiper-wrapper">
                            <!-- Thumbnail 1 -->
                            <div
                                class="swiper-slide w-1/4 opacity-40 hover:opacity-100 transition-opacity duration-300 cursor-pointer border-2 border-transparent hover:border-blue-500 rounded">
                                <img class="w-full h-full object-cover"
                                    src="{{ asset('backend/assets/images/gallery/deluxe-room-king-2-2000px_wide.jpg') }}"
                                    alt="Deluxe Room Thumbnail">
                            </div>
                            <!-- Thumbnail 2 -->
                            <div
                                class="swiper-slide w-1/4 opacity-40 hover:opacity-100 transition-opacity duration-300 cursor-pointer border-2 border-transparent hover:border-blue-500 rounded">
                                <img class="w-full h-full object-cover"
                                    src="{{ asset('backend/assets/images/gallery/images.jpg') }}"
                                    alt="Another Room Thumbnail">
                            </div>
                            <!-- Thumbnail 3 -->
                            <div
                                class="swiper-slide w-1/4 opacity-40 hover:opacity-100 transition-opacity duration-300 cursor-pointer border-2 border-transparent hover:border-blue-500 rounded">
                                <img class="w-full h-full object-cover"
                                    src="{{ asset('backend/assets/images/gallery/Superior-DeLuxe-Room_TB-1024x682.jpg') }}"
                                    alt="Resort View Thumbnail">
                            </div>
                            <!-- Thumbnail 4 -->
                            <div
                                class="swiper-slide w-1/4 opacity-40 hover:opacity-100 transition-opacity duration-300 cursor-pointer border-2 border-transparent hover:border-blue-500 rounded">
                                <img class="w-full h-full object-cover"
                                    src="{{ asset('backend/assets/images/gallery/Deluxe Twin 1074 2.jpg') }}"
                                    alt="Pool Area Thumbnail">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End::row-3 -->
@endsection
