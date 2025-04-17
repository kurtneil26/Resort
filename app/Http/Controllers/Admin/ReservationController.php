<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index()
    {
        // Retrieve all reservations
        $reservations = Reservation::all();

        // Pass reservations to the view
        return view('admin.reservation.index', compact('reservations'));
    }
}
