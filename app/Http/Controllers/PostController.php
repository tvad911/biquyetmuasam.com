<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('blog-detail');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = \Post::find(1);
        return view('posts.detail',compact('post'));
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

    /**
     * [show description]
     * @param  [type] $slug [description]
     * @return [type]       [description]
     */
    public function slug($slug)
    {
        $post = \Post::type('post')->slug($slug)->first();
        // $comments = get_approved_comments($post->ID);
         $categories = get_the_category($post->ID);
        $tags = get_the_terms( $post->ID, 'post_tag');

        return view('post-detail',compact('post', 'categories', 'tags' , 'comments'));
    }
    /**
     * [list description]
     * @return [type] [description]
     */
    public function blog()
    {
        // $post = \Post::type('post')->status('published');
        $posts = \Post::type('post')->published()->get();

        // dd($posts);
        return view('posts.list',compact('posts'));
    }
}
