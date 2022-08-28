<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;
class ProfileController extends Controller
{
    public function edit()
    {       
        return view('profile.edit');
    }

    public function update(Request $request)
    {       
        $id = auth()->id();
        $request->validate([
            "name"=>'required|max:255',
            "email"=>"required|email|max:255|unique:users,email,".$id,
            "password"=>'nullable|max:255',
        ]);
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        if(!empty($request->password)){
            $user->password = Hash::make($request->password);
        }
       
        return redirect()->route("profile.edit");
    }
}
