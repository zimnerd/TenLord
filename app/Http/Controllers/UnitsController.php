<?php

namespace App\Http\Controllers;

use App\Tenant;
use Illuminate\Http\Request;
use Input;
use Redirect;
use App\Unit;
use App\Property;

class UnitsController extends Controller
{
    //

    public function index(Property $property)
    {
        return view('units.index', compact('property'));
    }


    public function create(Property $property)
    {
        return view('units.create', compact('property'));
    }

    
    
    public function show(Property $property, Unit $unit, Tenant $tenant)
    {
        $tenant = Tenant::all()->find($unit->tenant_id);
        return view('units.show', compact('property', 'unit','tenant'));
    }


    public function edit(Property $property, Unit $unit)
    {
        return view('units.edit', compact('property', 'unit'));
    }



    protected $rules = [
        'name' => ['required', 'min:3'],
    ];


    public function store(Property $property, Request $request)
    {
        $this->validate($request, $this->rules);

        $input = Input::all();
        $input['property_id'] = $property->id;
        Unit::create( $input );

        return Redirect::route('properties.show', $property->id)->with('Unit created.');
    }


    public function update(Property $property, Unit $unit, Request $request)
    {
        $this->validate($request, $this->rules);

        $input = array_except(Input::all(), '_method');
        $unit->update($input);

        return Redirect::route('properties.units.show', [$property->id, $unit->id])->with('message', 'Unit updated.');
    }

    public function destroy(Property $property, Unit $unit)
    {
        $unit->delete();

        return Redirect::route('properties.show', $property->id)->with('message', 'Unit deleted.');
    }

}
