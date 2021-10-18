<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AllocationVehiclesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('allocation_vehicles.index');
    }

    /**
     * 週間
     *
     * @return \Illuminate\Http\Response
     */
    public function week(Request $request)
    {
        return view('allocation_vehicles.week');
    }
}
