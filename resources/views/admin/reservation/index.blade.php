{{-- filepath: resources/views/admin/reservation/index.blade.php --}}
@extends('admin.layouts.master')

@section('title', 'Reservations List')

@section('contents')
    <div class="main-content pt-8"> <!-- Added pt-8 for top padding -->
        <div class="max-w-2xl mx-auto bg-white shadow-lg rounded-lg p-8">
            <div class="flex justify-between items-center mb-6">
                <h1 class="text-3xl font-bold text-gray-800">Reservations List</h1>
                <a type="button" href="{{ route('admin.room.index') }}" class="ti-btn ti-btn-primary ti-btn-wave">
                    <i class="ri-add-line"></i> Add New Reservation
                </a>
            </div>
            <table class="table-auto w-full border-collapse border border-gray-300">
                <thead>
                    <tr class="bg-gray-100">

                        <th class="border border-gray-300 px-4 py-2">Name</th>
                        <th class="border border-gray-300 px-4 py-2">Address</th>
                        <th class="border border-gray-300 px-4 py-2">Phone</th>
                        <th class="border border-gray-300 px-4 py-2">Room Type</th>
                        <th class="border border-gray-300 px-4 py-2">Check-In</th>
                        <th class="border border-gray-300 px-4 py-2">Check-Out</th>
                        <th class="border border-gray-300 px-4 py-2">Total Guests</th>
                        <th class="border border-gray-300 px-4 py-2">Paid</th> <!-- Added Paid column -->
                        <th class="border border-gray-300 px-4 py-2">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($reservations as $reservation)
                        <tr>

                            <td class="border border-gray-300 px-4 py-2">{{ $reservation->first_name }}
                                {{ $reservation->last_name }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $reservation->address }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $reservation->phone }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ ucfirst($reservation->room_type) }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $reservation->check_in }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $reservation->check_out }}</td>
                            <td class="border border-gray-300 px-4 py-2">
                                {{ $reservation->guests_adults + $reservation->guests_children }}
                            </td>
                            <td class="border border-gray-300 px-4 py-2">
                                @if ((bool) $reservation->is_paid === true)
                                    <span class="text-red-600 font-semibold">No</span>
                                @else
                                    <span class="text-green-600 font-semibold">Yes</span>
                                @endif

                            </td>
                            <td class="border border-gray-300 px-4 py-2">
                                <a href="{{ route('admin.admin.receipt.show', $reservation->id) }}"
                                    class="text-blue-500 hover:underline">View Receipt</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
