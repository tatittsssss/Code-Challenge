<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{
    public function signup(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required',
            'age' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required|string|min:8',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

    $hashedPassword = bcrypt($request->password);

    $imagePath = null;
    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('images', 'public');
    }

    $userId = DB::table('users')->insertGetId([
        'email' => $request->email,
        'password' => $hashedPassword,
    ]);

    DB::table('user_info')->insert([
        'user_id' => $userId,
        'name' => $request->name,
        'address' => $request->address,
        'age' => $request->age,
        'image' => $imagePath,
    ]);

    return response()->json(['message' => 'success']);

    }
}
