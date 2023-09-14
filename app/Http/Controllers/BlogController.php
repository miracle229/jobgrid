<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Categorie;
use App\Models\blog;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::all();
        return view('blog.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Categorie::all();
        return view('blog.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required', 'min:3', 'string'],
            'description' => ['required', 'min:3', 'string'],
            'categorie' => ['required'],
            'image' =>['required','nullable','file','image']
        ]);

       // dd($request->image->store('public'));

        $image = Image::create([
            //'path' => "public/wOCkqAhNwRaDi5vUmTJzn5Kv96c9zxc9YEVRZFCT.jpg"
            'path'=>$request->image->store('public')
       ]);
    
        $blog = Blog::create([
            'title'=>$request->title,
            'description'=>$request->description,
            'category_id'=>$request->categorie,
            'image_id' => $image->id
        ]);
    
        return redirect()->route('blog.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
