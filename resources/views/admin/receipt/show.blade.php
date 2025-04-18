{{-- filepath: resources/views/admin/receipt/show.blade.php --}}
@extends('admin.layouts.master')

@section('title', 'Reservation Receipt')

@section('contents')
    <div class="main-content">
        <div class="max-w-4xl mx-auto bg-white shadow-lg rounded-lg p-8 relative">
            <!-- Exit Icon -->
            <a href="{{ route('admin.reservation.index') }}"
                class="absolute top-4 right-1/5 bg-red-500 hover:bg-red-600 rounded-full w-10 h-10 flex items-center justify-center transition-colors duration-200 shadow-sm"
                title="Close receipt">
                <i class="fas fa-times text-xl text-white"></i> <!-- Close icon -->
            </a>

            <h1 class="text-3xl font-bold text-center text-gray-800 mb-6">Reservation Receipt</h1>

            <div class="border-b pb-4 mb-6">
                <h2 class="text-xl font-semibold text-gray-700 mb-4">Customer Information</h2>
                <div class="grid grid-cols-2 gap-4">
                    <p><strong>Name:</strong> {{ $reservation->first_name }} {{ $reservation->last_name }}</p>
                    <p><strong>Email:</strong> {{ $reservation->email }}</p>
                    <p><strong>Phone:</strong> {{ $reservation->phone }}</p>
                    <p><strong>Address:</strong> {{ $reservation->address }}, {{ $reservation->city }},
                        {{ $reservation->state }}
                        {{ $reservation->postal_code }}</p>
                </div>
            </div>

            <div class="border-b pb-4 mb-6">
                <h2 class="text-xl font-semibold text-gray-700 mb-4">Booking Details</h2>
                <div class="grid grid-cols-2 gap-4">
                    <p><strong>Room Type:</strong> {{ ucfirst($reservation->room_type) }}</p>
                    <p><strong>Check-In:</strong> {{ $reservation->check_in }}</p>
                    <p><strong>Check-Out:</strong> {{ $reservation->check_out }}</p>
                    <p><strong>Guests:</strong> {{ $reservation->guests_adults }} 15+ Years Old,
                        {{ $reservation->guests_children }}
                        0-14 Years Old</p>
                    @if ($reservation->package)
                        <p><strong>Package:</strong> {{ ucfirst(str_replace('_', ' ', $reservation->package)) }}</p>
                    @else
                        <p><strong>Package:</strong> None</p>
                    @endif
                </div>
            </div>

            <div class="border-b pb-4 mb-6">
                <h2 class="text-xl font-semibold text-gray-700 mb-4">Pricing Breakdown</h2>
                <div class="grid grid-cols-2 gap-4">
                    <p><strong>Room Price:</strong></p>
                    <p class="text-right">₱{{ number_format($roomPrice, 2) }}</p>
                    @if ($packagePrice > 0)
                        <p><strong>Package Price:</strong></p>
                        <p class="text-right">₱{{ number_format($packagePrice, 2) }}</p>
                    @endif
                    <p><strong>Guest Fees:</strong></p>
                    <p class="text-right">₱{{ number_format($guestFees, 2) }}</p>
                </div>
            </div>

            <div class="bg-gray-100 p-4 rounded-lg">
                <h2 class="text-xl font-semibold text-gray-700 mb-2">Total Amount</h2>
                <p class="text-2xl font-bold text-red-600 text-right">₱{{ number_format($reservation->total_price, 2) }}</p>
            </div>
        </div>
    </div>
@endsection
