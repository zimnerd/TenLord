<?php

namespace App\Http\Controllers;

use App\Owner;
use Illuminate\Http\Request;
use Input;
use Redirect;
use App\Property;
use App\Unit;

class OwnersController extends Controller
{
    //


    public function index(Property $property)
    {
        return view('owners.index', compact('property'));
    }


    public function create(Property $property,  Owner $owner, Unit $unit)

    {

        return view('owners.create', compact('property','owner','unit'));
    }



    public function show(Property $property, Unit $unit, Owner $owner)
    {

        return view('owners.show', compact('property', 'unit', 'owner'));
    }


    public function edit(Property $property, Owner $owner)
    {
        return view('owners.edit', compact('property', 'owner'));
    }



    protected $rules = [
        'name' => ['required', 'min:3'],
    ];


    public function store(Property $property, Request $request, Unit $unit, Owner $owner )
    {
        $this->validate($request, $this->rules);
        $input = Input::all();
        $input['property_id'] = $property->id;
        $input['unit_id'] = $unit->id;
        Owner::create( $input );

        $thisowner = Owner::all()->where('unit_id', $unit->id)->last();
        $unit->owner_id = $thisowner->id;
        $unit->save();



        return Redirect::route('properties.show', $property->id)->with('message', 'Owner created.');
    }


    public function update(Property $property, Owner $owner,   Request $request)
    {
        $this->validate($request, $this->rules);
        $property_id = $request->property_id;
        $owner_id = $owner->id;
        $property = Property::all()->find($property_id);
        $property->owner_id = $owner_id;
        $property->save();


        $input = array_except(Input::all(), '_method');
        $owner->update($input);

        return Redirect::route('properties.owners.show', [$property->id, $owner->id])->with('message', '  Owner updated.');
    }

    public function destroy(Property $property, Unit $unit, Owner $owner)
    {
        $owner->delete();

        return Redirect::route('properties.show', $property->id)->with('message', 'Owner deleted.');
    }

}
