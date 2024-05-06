<?php

namespace sevag\admin\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index(){
       return view('admin::index');
    }
}