<?php

namespace App\Http\Controllers;

use App\Owner;
use App\Unit;
use Illuminate\Http\Request;
use Input;
use Redirect;
use App\Tenant;
use App\Property;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( Tenant $tenant, Property $property, Unit $unit, Owner $owner)
    {
        return view('home', compact('tenant','property','unit','owner'));
    }
}
