<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use Illuminate\Support\Facades\Session;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    { 
        $pt=Post::all()->sortByDesc('updated_at');
        $count= Post::all()->count();
        return view('post.index')->with(['beitraege'=> $pt, 'zahl'=> $count]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {   
        $request->validate(
            [
                'kommentar1' => 'required|min:5'
           ]
        );

        $post = new Post(
            [
                'comment' => $request['kommentar1'],
                'user_id' => auth()->id()

           ]
        );#ende new Post

        session()->flash('msg_success','Kommentar <b>'.$post->titel.'</b> wurde eingefügt');

        $post->save();
        return redirect('/post');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('post.show')->with('post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view('post.edit')->with('post', $post);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        $request->validate(
            [
                'kommentar1' => 'required|min:5'
           ]
        );

        $post->update(
            [
                'comment' => $request->kommentar1
            ]
        );

        return redirect('/post');
    }

    
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect('/post');
    }

    public function showDelete($id) {
        $id = Post::find($id);
        return view('post.delete')->with('post', $id);
    }
}