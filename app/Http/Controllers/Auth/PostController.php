<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\Post\CreateRequest;
use App\Models\gallery;
use Illuminate\Http\Request;
use App\Models\category;
use App\Models\post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('auth.posts.create');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        // return view('auth/posts/create')->with('categories', $categories);
        return view('auth.posts.create',['categories'=>$categories]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateRequest $request)
    {
        if($file = $request->has('file')){
            $file = $request->file;
            $filename = time().$file->getClientOriginalName();
            $imagepath = public_path() . '/image/posts';  
            $file->store($imagepath);
            $gallery = gallery::create([
                'image' => $filename,
            ]);
        }
        Post::create([
            'gallery_id'=> $gallery->id, 
            'category_id'=> $request->category, 
            'title'=> $request->title,
            'description'=> $request->description,
            'is_publish'=> $request->is_publish
        ]);
        return $request->all();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}