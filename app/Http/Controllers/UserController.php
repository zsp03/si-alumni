<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function search(Request $request) {
        if($request->has('search')) {
            $alumni = User::where('name', 'LIKE', '%'.$request->search.'%')->get();
        }
        else {
            $alumni = User::all();
        }
        return view('database', ['alumni'=>$alumni]);
    }
}
