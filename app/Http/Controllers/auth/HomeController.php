<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //dashboard related
    public function index() {
        return view('admin.layout.master');
    }
}
