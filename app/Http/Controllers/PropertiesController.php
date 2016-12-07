<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Input;
use Redirect;
use App\Property;
use App\Unit;
use App\Owner;
use App\Tenant;
use DB;
use paginate;
use Image;
use Response;
class PropertiesController extends Controller
{
    //
    protected $rules = [
        'name' => ['required', 'min:3'],
    ];

    public function index()
    {

        $properties = Property::paginate(8);
        return view('properties.index', compact('properties'));
    }

    public function create()
    {
        return view('properties.create');
    }
    public function getProperties(Property $property)
    {

        $units = DB::table('units')
            ->select(DB::raw('count(*) as unit_count, property_id'))
            ->groupBy('property_id')
            ->get();
        return Response::json($units);

    }





    public function show(Property $property, Unit $unit, Owner $owner ,Tenant $tenant)

    {
        $properties = Property::paginate(4);
        return view('properties.show', compact('property','properties','flats','unit','units','owner','tenant'));
    }


    public function edit(Property $property)
    {
        return view('properties.edit', compact('property'));
    }



    public function store(Request $request)
    {
        $this->validate($request, $this->rules);

        $input = Input::all();

        if($request->hasFile('photos')){
            $avatar = $request->file('photos');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->save( public_path('/images/properties/'.$filename ));
            $input['photos'] = $filename;
        }
        else{ $filename = "nothing";}
        Property::create( $input );


        return Redirect::route('properties.index')->with('message', 'Properties created');
    }


    public function update(Property $property, Request $request)
    {
        $this->validate($request, $this->rules);

        $input = array_except(Input::all(), '_method');
        if($request->hasFile('photos')){
            $avatar = $request->file('photos');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->save( public_path('/images/properties/'.$filename ));
            $input['photos'] = $filename;
        }
        else{ $filename = "nothing";}

        $property->update($input);

        return Redirect::route('properties.show', $property->id)->with('message', ' Property updated.');
    }


    public function destroy(Property $property)
    {
        $property->delete();

        return Redirect::route('properties.index')->with('message', 'Property deleted.');
    }

}
