@extends('admin.layouts.master')

@section('title')
    Resort Kalinaw | Rooms
@endsection

@push('scripts')
    <script src="{{ asset('backend/assets/js/dataTables.min.js') }}"></script>
@endpush

@section('contents')
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-6xl font-bold mb-8 text-center">Our Rooms</h1>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Deluxe Room -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden flex flex-col">
                <div class="relative flex justify-center">
                    <img src="{{ asset('backend/assets/images/gallery/deluxe-room-king-2-2000px_wide.jpg') }}"
                        alt="Deluxe Room" class="w-1/2 h-64 object-cover pt-5">
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <h3 class="text-xl font-semibold mb-2 text-center">Deluxe Room</h3>
                    <p class="text-gray-600 mb-4 text-center">
                        Spacious room with king-sized bed, balcony overlooking the ocean,
                        and premium amenities for a comfortable stay.
                    </p>
                    <div class="mt-auto text-center">
                        <span class="text-lg font-bold block mb-2">₱1,200.00</span>
                        <div class="flex flex-col items-center">
                            <a href="{{ route('admin.room.modal', ['room_type' => 'deluxe']) }}"
                                class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-lg transition mb-2 inline-block">
                                Book Now
                            </a>
                            <div class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm font-semibold">
                                3 Available
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Suite Room -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden flex flex-col">
                <div class="relative flex justify-center">
                    <img src="{{ asset('backend/assets/images/gallery/deluxe-room-king-2-2000px_wide.jpg') }}"
                        alt="Deluxe Room" class="w-1/2 h-64 object-cover pt-5">
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <h3 class="text-xl font-semibold mb-2 text-center">Suite Room</h3>
                    <p class="text-gray-600 mb-4 text-center">
                        Luxurious suite with separate living area, premium amenities,
                        and stunning ocean views for an unforgettable experience.
                    </p>
                    <div class="mt-auto text-center">
                        <span class="text-lg font-bold block mb-2">₱2,500.00</span>
                        <div class="flex flex-col items-center">
                            <a href="{{ route('admin.room.modal', ['room_type' => 'suite']) }}"
                                class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-lg transition mb-2 inline-block">
                                Book Now
                            </a>
                            <div class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm font-semibold">
                                2 Available
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Villa -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden flex flex-col">
                <div class="relative flex justify-center">
                    <img src="{{ asset('backend/assets/images/gallery/deluxe-room-king-2-2000px_wide.jpg') }}"
                        alt="Deluxe Room" class="w-1/2 h-64 object-cover pt-5">
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <h3 class="text-xl font-semibold mb-2 text-center">Villa</h3>
                    <p class="text-gray-600 mb-4 text-center">
                        Private villa with pool, full kitchen, and exclusive amenities
                        for the ultimate luxury experience.
                    </p>
                    <div class="mt-auto text-center">
                        <span class="text-lg font-bold block mb-2">₱5,000.00</span>
                        <div class="flex flex-col items-center">
                            <a href="{{ route('admin.room.modal', ['room_type' => 'villa']) }}"
                                class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-lg transition mb-2 inline-block">
                                Book Now
                            </a>
                            <div class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm font-semibold">
                                1 Available
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
