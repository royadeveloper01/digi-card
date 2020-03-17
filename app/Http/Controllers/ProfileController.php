<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\URL;
use App\Profile;
use Auth;

class ProfileController extends Controller
{
    //
    public function profile(){

        return view('profiles.view');
    }

    
    public function updateProfile(Request $request){
        $this->validate($request,[
            'profile_pic' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'name' => 'required',
            'company_name' => 'required',
            'email' => 'required',
            'bio' => 'required',
            'gender' => 'required',
        ]);
        
        $profiles = new Profile;
        $profiles->name = $request->name;
        $profiles->company_name = $request->company_name;
        $profiles->email = $request->email;
        $profiles->bio= $request->bio;
        $profiles->gender = $request->gender;
        $profiles->user_id = Auth::user()->id;
        $profiles->phone_number = $request->phone_number;
        if($request->hasFile('profile_pic')){
             $file = $request->file('profile_pic');
    $file->move(public_path().'/uploads/', 
    $file->getClientOriginalName());
 $url = URL::to("/").'/uploads/'.
      $file->getClientOriginalName();
            
        }
   
        $profiles->profile_pic = $url;
        $profiles->save();
        return redirect('/profile')->
         with('response', 'Profile Added Sucessfully');
        
        } 
}
