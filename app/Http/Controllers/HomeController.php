<?php

namespace TenLord\Http\Controllers;

use TenLord\Unit;
use Illuminate\Http\Request;
use Input;
use Redirect;
use TenLord\Tenant;
use TenLord\Property;

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
    public function index( Tenant $tenant, Property $property, Unit $unit)
    {
        return view('home', compact('tenant','property','unit'));
    }
}
