<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Reservation;
use Illuminate\Http\Request;

class ReceiptController extends Controller
{
    public function index()
    {
        $reservations = Reservation::latest()->paginate(10);
        return view('admin.receipt.index', compact('reservations'));
    }

    public function store(Request $request)
    {
        // Validate and save the reservation
        $validatedData = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'phone' => 'required|string',
            'email' => 'required|email',
            'check_in' => 'required|date',
            'check_out' => 'required|date|after:check_in',
            'room_type' => 'required|string',
            'address' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'state' => 'required|string|max:255',
            'postal_code' => 'required|string|max:10',
            'guests_adults' => 'required|integer|min:1',
            'guests_children' => 'required|integer|min:0',
            'package' => 'nullable|string',
            'special_requests' => 'nullable|string',
        ]);

        $reservation = Reservation::create($validatedData);

        // Redirect to the reservation list
        return redirect()->route('admin.reservation.index');
    }

    public function show($id)
    {
        $reservation = Reservation::findOrFail($id);

        // Room prices
        $roomPrices = [
            'deluxe' => 2000,
            'suite' => 3500,
            'villa' => 5000,
        ];

        // Package prices
        $packagePrices = [
            'special_event' => 15000,
            'all_inclusive' => 2000,
            'family_fun' => 3500,
        ];

        // Calculate room price
        $roomPrice = $roomPrices[$reservation->room_type] ?? 0;

        // Calculate package price
        $packagePrice = $reservation->package ? ($packagePrices[$reservation->package] ?? 0) : 0;

        // Calculate guest fees
        $guestFees = ($reservation->guests_adults * 100) + ($reservation->guests_children * 50);

        // Total amount
        $totalAmount = $roomPrice + $packagePrice + $guestFees;

        return view('admin.receipt.show', compact('reservation', 'roomPrice', 'packagePrice', 'guestFees', 'totalAmount'));
    }
}
