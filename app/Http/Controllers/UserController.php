<?php

namespace App\Http\Controllers;
use App\Notifications\tenantAdded;
use Illuminate\Auth\Notifications\Notifiable;
use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;
use Image;
use App\User;
use App\Tenant;
use App\Owner;
use App\Property;

class UserController extends Controller
{
    //
    public function profile(){
    $user = User::find(1);


        return view('.users.profile', array('user' => Auth::user()) );
    }

    public function update_avatar(Request $request){

        // Handle the user upload of avatar
        if($request->hasFile('avatar')){
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300, 300)->save( public_path('/images/avatars/' . $filename ) );

            $user = Auth::user();
            $user->avatar = $filename;
            $user->save();
        }

        return view('users.profile', array('user' => Auth::user()) );

    }
    
    public function notifications( Property $property, Unit $unit, Owner $owner ,Tenant $tenant)
    {
    
    $user = User::find(1);
  
  return view('users.profile');
    
    
}

}