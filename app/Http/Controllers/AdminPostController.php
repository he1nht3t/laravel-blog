<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Validation\Rule;

class AdminPostController extends Controller
{
    public function index()
    {
        return view('admin.posts.index', [
            'posts' => Post::latest()->paginate(10),
        ]);
    }

    public function edit(Post $post)
    {
        return view('admin.posts.edit', [
            'post' => $post,
        ]);
    }

    public function update(Post $post)
    {
        $attributes = $this->validatePost($post);

        $post->update($attributes);

        return redirect('posts/'."$post->slug")->with('success', 'Your post has been updated.');
    }

    protected function validatePost(Post $post = null)
    {
        $post ??= new Post();

        request()->validate([
            'title' => 'required',
            'slug' => ['required', Rule::unique('posts', 'slug')->ignore($post)],
            'excerpt' => 'required',
            'thumbnail' => $post->exists ? ['image'] : ['required', 'image'],
            'body' => 'required',
            'category' => 'required|exists:categories,id',
        ]);

        return [
            'title' => request('title'),
            'slug' => request('slug'),
            'excerpt' => request('excerpt'),
            'body' => request('body'),
            'category_id' => request('category'),
            'user_id' => auth()->id(),
            'thumbnail' => request()?->file('thumbnail')?->store('thumbnails'),
        ];
    }

    public function store()
    {
        $attributes = $this->validatePost();

        Post::create($attributes);

        return redirect('/')->with('success', 'Your post has been published.');
    }

    public function create()
    {
        return view('admin.posts.create');
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return redirect('/')->with('success', 'Your post has been deleted.');
    }
}
