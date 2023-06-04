<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Commentaire;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ForumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Post::query()->orderBy('updated_at', "DESC");

        if (isset($request["post_search"])) {
            $name = $request->input('post_search');
            $query = $query->where('title', 'like', "%{$name}%");
        }

        $posts = $query->where("notice", '')->where('type', 'post')->orderBy("created_at","desc")->paginate(5);

        return view('pages.forum.index', [
            "posts" => $posts,
        ]);

    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if(auth()->user()){
            $post = new Post();
            return view('pages.forum.PostForm', ["post" => $post]);
        }else{
            return redirect()->route('app.login');
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $title = $request->input("title");
        $content = $request->input("content");

        $post = Post::create([
            "title" => $title,
            "content" => $content,
            "notice" => "",
            "type" => "post",
            "user_id" => auth()->user()->id
        ]);

        return redirect()->route("forum.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(Int $id)
    {
        $post = Post::findOrFail($id);
        return view('pages.forum.show', ["post" => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
