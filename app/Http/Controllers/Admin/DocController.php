<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DocController extends Controller
{
    public function index () {
        return view('admin.viewDoc');
    }
    public function DashBord (){
        return view('admin.DashBord');
    }
}
