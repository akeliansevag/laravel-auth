<?php

namespace sevag\admin\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function login(Request $request)
    {
        if ($request->email) {
            $request->validate([
                'email' => 'required',
                'password' => 'required'
            ]);
        }
        return view("admin::users.login");
    }
}
