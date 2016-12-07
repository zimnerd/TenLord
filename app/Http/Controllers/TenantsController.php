<?php

namespace App\Http\Controllers;

use App\Unit;
use App\Property;


use Illuminate\Http\Request;
use Input;
use Redirect;
use App\Tenant;



class TenantsController extends Controller
{
    //

    public function index(Property $property, Unit $unit)
    {
        return view('tenants.index', compact('property','unit'));
    }


    public function create(Property $property, Unit $unit)

    {

        return view('tenants.create', compact('property','unit'));
    }



    public function show(Property $property,Unit $unit,Tenant $tenant)
    {
        return view('tenants.show', compact('property','unit','tenant'));
    }


    public function edit(Property $property,Unit $unit, Tenant $tenant)
    {
        return view('tenants.edit', compact('property', 'tenant','unit'));
    }



    protected $rules = [
        'name' => ['required', 'min:3'],
    ];


    public function store(Property $property, Tenant $tenant, Unit $unit,  Request $request)
    {
        $this->validate($request, $this->rules);
       

        $input = Input::all();
        $input['property_id'] = $property->id;
        $input['unit_id'] = $unit->id;
        Tenant::create( $input );

         $unit_id = $unit->id;
        $tenant_id = $tenant->id;
        $unit = Unit::all()->find($unit_id);
        $unit->tenant_id = $tenant_id;
        $unit->save();

        return Redirect::route('properties.show', $property->id)->with('Tenant'. $tenant_id. ' created.');
    }


    public function update(Property $property,  Unit $unit, Tenant $tenant, Request $request)
    {
        $this->validate($request, $this->rules);
        $unit_id = $unit->id;
        $tenant_id = $tenant->id;
        $unit = Unit::all()->find($unit_id);
        $unit->tenant_id = $tenant_id;
        $unit->save();


        $input = array_except(Input::all(), '_method');
        $tenant->update($input);

        return Redirect::route('properties.units.tenants.show', [$property->id, $unit->id, $tenant->id])->with('message', '  Tenant updated.');
    }

    public function destroy(Property $property, Unit $unit, Tenant $tenant)
    {
        $tenant->delete();

        return Redirect::route('properties.show', $property->id)->with('message', 'Tenant deleted.');
    }

}
