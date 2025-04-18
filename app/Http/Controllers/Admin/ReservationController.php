<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index()
    {
        // Fetch reservations sorted by check_in date
        $reservations = Reservation::orderBy('check_in', 'asc')->get();


        // Pass reservations to the view
        return view('admin.reservation.index', compact('reservations'));
    }
    public function store(Request $request)
    {
        $data = $request->all();

        // Calculate total price
        $data['total_price'] = ($data['guests_adults'] + $data['guests_children']) * 1000; // Replace 1000 with room price logic

        // Save reservation
        Reservation::create($data);

        return redirect()->route('admin.reservation.index')->with('success', 'Reservation created successfully.');
    }
}
