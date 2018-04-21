<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use DB; //import DB to use SQL

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //echo "Hello";
        //return Post::all();
        //$posts = Post::all();//gets the data and stores in a variable
        //return Post::where("title","Post Two")->get();//select individual post based on where criteria
        //$posts = DB::select("SELECT * FROM posts");//get posts using SQL notation
        //$posts = Post::orderBy("title","desc")->take(1)->get();//show only 1 post - most recent?
               
        //$posts = Post::orderBy("title","desc")->get();//sort posts in descending order
        $posts = Post::orderBy("id","desc")->paginate(1);//paginate with one post per page - change number as desired once more new posts get created
        return view("posts/index")->with("posts", $posts);

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
        //returns the correct post based on the passed in id
        //return Post::find($id);//uses Eloquent notation
        $post = Post::find($id);
        return view("posts/show")->with("post",$post);
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
