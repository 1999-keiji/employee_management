<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;

class ChangePasswordController extends Controller
{
    public function change_password(Request $request, User $user){
        // dd($request->all());
        $request->validate([
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);
        $user->update([
            'password' => Hash::make($request->password)
        ]);
        return redirect()->route('users.index')->with('message', 'User Password updated Successfuly');
    }
}
