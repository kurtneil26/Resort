@extends('admin.layouts.master')

@section('title')
    Reservation Receipts | Resort Kalinaw
@endsection

@push('styles')
    <link href="{{ asset('backend/assets/css/dataTables.min.css') }}" rel="stylesheet">
@endpush

@section('contents')
    <div class="container mx-auto px-4 py-8">
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <div class="p-6">
                <div class="flex justify-between items-center mb-6">
                    <h1 class="text-2xl font-bold text-gray-800">Reservation Receipts</h1>
                </div>

                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200" id="reservationsTable">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Reservation #</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Guest Name</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Room Type</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Dates</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Total Guests</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Actions</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach ($reservations as $reservation)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">RK-{{ $reservation->id }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        {{ $reservation->first_name }} {{ $reservation->last_name }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        @switch($reservation->room_type)
                                            @case('deluxe')
                                                Deluxe Room
                                            @break

                                            @case('suite')
                                                Suite Room
                                            @break

                                            @case('villa')
                                                Villa
                                            @break
                                        @endswitch
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        {{ $reservation->check_in->format('M j, Y') }} -
                                        {{ $reservation->check_out->format('M j, Y') }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        {{ $reservation->guests_adults + $reservation->guests_children }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <a href="{{ route('admin.receipt.show', $reservation) }}"
                                            class="text-blue-600 hover:text-blue-900 mr-3">
                                            View Receipt
                                        </a>
                                        <a href="#" class="text-red-600 hover:text-red-900">Cancel</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="mt-4">
                    {{ $reservations->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('backend/assets/js/dataTables.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#reservationsTable').DataTable({
                responsive: true,
                paging: false,
                info: false,
                searching: true
            });
        });
    </script>
@endpush
