<?php

namespace SoftwaresCares\SuperBlog\Http\Controllers;

use Illuminate\Http\Request;

class SuperblogController extends Controller
{
    public function index(){
        return view('superblog::blog');
    }
}
