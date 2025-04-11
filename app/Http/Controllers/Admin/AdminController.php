<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ResortPackage;
use Yajra\DataTables\Facades\DataTables;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //query the model
        $packages = ResortPackage::where('id', 1)->first();
      //  dd($packages);
        return view('welcome', compact('packages'));
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function blankTemplate()
    {
        return view('admin.blank.blank');
    }

    public function getUsers(Request $request)
    {
        if ($request->ajax()) {
            $users = User::all(); // Modify this as per your query

            return DataTables::of($users)
                ->addIndexColumn()
                ->addColumn('action', function($row) {
                    return '<button class="btn btn-sm btn-info">Edit</button>'; // Add more actions as needed
                })
                ->rawColumns(['action'])
                ->make(true);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
