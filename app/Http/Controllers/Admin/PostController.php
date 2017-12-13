<?php

namespace UmDoisTresCarros\Http\Controllers\Admin;

use Illuminate\Http\Request;
use UmDoisTresCarros\Http\Controllers\Controller;
use UmDoisTresCarros\Post;

class PostController extends Controller
{
    private $totalPages = 10;
   
    public function index()
    {
        return view('admin.post.index', ['posts' => Post::orderBy('id', 'desc')->paginate($this->totalPages)]);
    }

    public function create()
    {
        return view('admin.post.create');
    }
   
    public function store(Request $request)
    {
        Post::create($request->all());
        return response()->redirectToRoute('posts.index');
    }
   
    public function show($id)
    {
        return view('admin.post.show', ['post' => Post::findOrFail($id)]);
    }
    
    public function edit($id)
    {
        return view('admin.post.edit', ['post' => Post::findOrFail($id)]);
    }

    public function update(Request $request, $id)
    {
        Post::findOrFail($id)
                ->update($request->all());
        
        return response()->redirectToRoute('posts.show', $id);
    }

    public function destroy($id)
    {
        Post::findOrFail($id)->delete();
       
        return response()->redirectToRoute('posts.index');
    }
}
