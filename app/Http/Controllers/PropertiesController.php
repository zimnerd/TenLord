<?php

namespace TenLord\Http\Controllers;

use Illuminate\Http\Request;
use Input;
use Redirect;
use TenLord\Property;
use TenLord\Unit;
class PropertiesController extends Controller
{
    //
    protected $rules = [
        'name' => ['required', 'min:3'],
    ];

    public function index()
    {
        $properties = Property::all();
        return view('properties.index', compact('properties'));
    }

    public function create()
    {
        return view('properties.create');
    }


    public function show(Property $property, Unit $unit)
    {

        return view('properties.show', compact('property','unit'));
    }


    public function edit(Property $property)
    {
        return view('properties.edit', compact('property'));
    }



    public function store(Request $request)
    {
        $this->validate($request, $this->rules);

        $input = Input::all();
        Property::create( $input );

        return Redirect::route('properties.index')->with('message', 'Properties created');
    }


    public function update(Property $property, Request $request)
    {
        $this->validate($request, $this->rules);

        $input = array_except(Input::all(), '_method');
        $property->update($input);

        return Redirect::route('properties.show', $property->id)->with('message', 'Property updated.');
    }


    public function destroy(Property $property)
    {
        $property->delete();

        return Redirect::route('properties.index')->with('message', 'Property deleted.');
    }

}
