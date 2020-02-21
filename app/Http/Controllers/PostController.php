<?php

namespace App\Http\Controllers;

use App\Post;
use App\Tag;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request('tag')) {
            $posts = Tag::where('name', request('tag'))->firstOrFail()->posts;
        } else {
            $posts = Post::orderBy('id', 'desc')->get();
        }
        return view('post/index', [
            'posts' => $posts
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('post/create', [
            'tags' => Tag::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd(request()->all());
        $this->validatePost();

        $post = new Post(request(['title', 'excerpt', 'content'])); // Associative Array
        $post->user_id = Auth::id();
        $post->save();

        $post->tags()->attach(request('tags'));

        return redirect(route('posts.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $post = Post::findOrFail($id);
        $user = $post->user;
        return view('post/show', compact('post', 'user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $post['tags'] = Post::findOrFail($post->id)->tags->pluck('id')->toArray();
        // return $post;
        return view('post/update', [
            'post' => $post,
            'tags' => Tag::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        // dd(request()->all());
        $this->validatePost();

        $post->user_id = Auth::id();
        $post->title = request('title');
        $post->excerpt = request('excerpt');
        $post->content = request('content');
        $post->save();

        $post->tags()->detach();
        $post->tags()->attach(request('tags'));

        return redirect(route('posts.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
        $post->delete();
        return redirect(route('posts.index'));
    }

   public function validatePost() {
        return request()->validate([
            'title' => ['required'],
            'excerpt' => ['required'],
            'content' => 'required',
            'tags' => 'exists:tags,id'
        ]);
   }

}
