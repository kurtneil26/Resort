<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        // Today's Sales
        $todaySales = DB::table('reservations')
            ->whereDate('check_in', Carbon::today())
            ->sum('total_price');

        // This Week's Sales
        $weekSales = DB::table('reservations')
            ->whereBetween('check_in', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])
            ->sum('total_price');

        // This Month's Sales
        $monthSales = DB::table('reservations')
            ->whereMonth('check_in', Carbon::now()->month)
            ->whereYear('check_in', Carbon::now()->year)
            ->sum('total_price');

        // This Year's Sales
        $yearSales = DB::table('reservations')
            ->whereYear('check_in', Carbon::now()->year)
            ->sum('total_price');

        return view('admin.dashboard', compact('todaySales', 'weekSales', 'monthSales', 'yearSales'));
    }
}
