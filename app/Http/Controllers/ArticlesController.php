<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Article;
use App\Tag;
use App\Category;
use App\Image;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.articles.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tags = Tag::orderBy('name', 'ASC')->lists('name', 'id');
        $categories = Category::orderBy('name', 'ASC')->lists('name', 'id');

        return view('admin.articles.create')
            ->with('tags', $tags)
            ->with('categories', $categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->tags);
        /** MANIPULACION DE IMAGENES **/
        if ($request->file('image')) {
            $file = $request->file('image');
            $image_name = 'blog2' . time() . $file->getClientOriginalExtension();
            $path = public_path() . '/images/articles/';
            $file->move($path, $image_name);
        }
        $article = new Article($request->all());
        $article->user_id = \Auth::user()->id;
        //dd($article->category_id);
        $article->save();
        $article->tags()->sync($request->tags);

        $image = new Image();
        $image->name = $image_name;
        $image->article()->associate($article);
        $image->save();

        flash('Articulo id = '. $article->id .' agregado de forma exitosa', 'success');
        return redirect()->route('admin.articles.index');

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
