<?php

namespace SoftwarescCares\SuperBlog\Http\Controllers;

use Illuminate\Http\Request;

class SuperBlogController extends Controller
{
    public function index(){
        return view('superblog::blog');
    }
}
