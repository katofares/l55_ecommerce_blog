<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Post;
use Session;

class PostsController extends Controller
{
    // Pagination limit
    const LIMIT = 10;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::latest()->paginate(self::LIMIT);
        return view('backend.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StorePostRequest $request
     * @return void
     */
    public function store(StorePostRequest $request)
    {
        $post = new Post();
        $post->title = $request->title;
        $post->body = $request->body;
        return $post->save() ? redirect()->route('admin.posts.index')->with('success', 'posts created successfully') : back();

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
     * @param Post $post
     * @return void
     */
    public function edit(Post $post)
    {
        return view('backend.posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param StorePostRequest $request
     * @param Post $post
     * @return void
     */
    public function update(StorePostRequest $request, Post $post)
    {
        $post->title = $request->title;
        $post->body = $request->body;
        return $post->save() ? redirect()->route('admin.posts.index')->with('success', 'posts updated successfully') : back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Post $post
     * @return void
     * @throws \Exception
     */
    public function destroy(Post $post)
    {
        if($post->delete()){
            return redirect()->route('admin.posts.index')->with('success', 'Post deleted successfully');
        } else {
            return back();
        }
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * send posts to trash using soft delete functionality
     */
    public function trash()
    {
        $trashed_posts = Post::onlyTrashed()->orderBy('deleted_at', 'DESC')->get();
        return view('backend.posts.trashed', compact('trashed_posts'));

    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     * Restore trashed posts
     */
    public function restore($id)
    {
        $trashed_post = Post::withTrashed()->find($id);

        if ($trashed_post->restore()) {
            return back()->with('success', 'Post restored successfully');
        }
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     * delete soft deleted posts permanently.
     */
    public function remove ($id)
    {
        $removed_post = Post::onlyTrashed()->findOrFail($id);
        if($removed_post->forceDelete()){
            return back()->with('info', 'Post deleted permanently');
        } else {
          return back();
        }


    }

}
