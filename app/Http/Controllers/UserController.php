<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
    //
    function login(Request $req)
    {
         $user= User::where(['email'=>$req->email])->first();
         if($user && Hash::check($req->password, $user->password))
         {
             if($user->role == 'admin'){
                session()->put('admin',$user);
                 return redirect('/'); //Redirect Accordingly
             }
            if($user->role  == 'farmer'){
                session()->put('farmer',$user);
                 return redirect('/'); //Redirect Accordingly
             }
            if($user->role  == 'buyer'){
                session()->put('buyer',$user);
                 return redirect('/'); //Redirect Accordingly
             }
         }
         else
         {
             return "username or password is not correct";             
         }
    }

    function adminLogout()
        {
            session()->forget('admin');
            return redirect('/'); 
        }

    function farmerLogout()
        {
            session()->forget('farmer');
            return redirect('/'); 
        }

    function buyerLogout()
        {
            session()->forget('buyer');
            return redirect('/'); 
        }

    function register(Request $req)
    {
        $user= new User;
        $user->name=$req->name;
        $user->email=$req->email;
        $user->password=Hash::make($req->password);
        $user->address=$req->address;
        $user->role=$req->role;
        $user->save();
        return redirect("/login");

    }  
    public function update(Request $request, Profile $profile)
    {
        $request->validate([
            'name' => 'required',
            'contact' => 'required',
        ]);

        $profile->update($request->all());

        return redirect()->route('profile')
                        ->with('success','Profile updated successfully');
    }

}
