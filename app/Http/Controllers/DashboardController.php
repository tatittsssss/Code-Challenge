<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function viewUser(Request $request)
    {
        
        $userId = Auth::user()->id;

        $user = DB::table('users')
            ->join('user_info', 'users.id', '=', 'user_info.user_id')
            ->where('users.id', $userId)
            ->select('users.*', 'user_info.name', 'user_info.address', 'user_info.age', 'user_info.image')
            ->first();

        return view('dashboard', compact('user'));

    }

}
