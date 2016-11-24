<?php

namespace App\Http\Controllers;

use App\Unit;
use Illuminate\Http\Request;
use Input;
use Redirect;
use App\Tenant;
use App\Property;

class TenantsController extends Controller
{
    //

    public function index(Property $property)
    {
        return view('tenants.index', compact('property'));
    }


    public function create(Property $property, Unit $unit)

    {

        return view('tenants.create', compact('property','unit'));
    }



    public function show(Property $property, Tenant $tenant)
    {

        return view('tenants.show', compact('property', 'tenant'));
    }


    public function edit(Property $property, Tenant $tenant)
    {
        return view('tenants.edit', compact('property', 'tenant'));
    }



    protected $rules = [
        'name' => ['required', 'min:3'],
    ];


    public function store(Property $property, Request $request)
    {
        $this->validate($request, $this->rules);

        $input = Input::all();
        $input['property_id'] = $property->id;
        Tenant::create( $input );

        return Redirect::route('properties.show', $property->id)->with('Tenant created.');
    }


    public function update(Property $property, Tenant $tenant, Unit $unit,  Request $request)
    {
        $this->validate($request, $this->rules);
        $unit_id = $request->unit_id;
        $tenant_id = $tenant->id;
        $unit = Unit::all()->find($unit_id);
        $unit->tenant_id = $tenant_id;
        $unit->save();


        $input = array_except(Input::all(), '_method');
        $tenant->update($input);

        return Redirect::route('properties.tenants.show', [$property->id, $tenant->id])->with('message', '  Tenant updated.');
    }

    public function destroy(Property $property, Tenant $tenant)
    {
        $tenant->delete();

        return Redirect::route('properties.show', $property->id)->with('message', 'Tenant deleted.');
    }

}
