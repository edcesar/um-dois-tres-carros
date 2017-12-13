<?php

namespace UmDoisTresCarros\Http\Controllers;

use Illuminate\Http\Request;
use UmDoisTresCarros\Post;

class HomeController extends Controller
{
    private $totalPages = 10;
    
    public function index()
    {
        return view('home', ['posts' => Post::orderBy('created_at', 'desc')->paginate($this->totalPages)]);
    }
    
    public function post($id)
    {
        return view('post', ['post' => Post::find($id)]);
    }
}
