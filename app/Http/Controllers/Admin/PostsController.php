<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Post;
use App\Category;
use App\Tag;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->paginate(2);
        return view('admin.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::pluck('name', 'id');

        $tags = Tag::pluck('name', 'id');

        return view('admin.posts.create')->with('categories', $categories)->with('tags', $tags);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        // $post = $this->validate(request(), [
        //     'title' => 'required',
        //     'content' => 'required'
        //     ]);

        // $post = request()->validate([
        //     'title' => 'required',
        //     'content' => 'required'
        // ]);


        // Post::create($post);

        // store in the database
        $post = new Post;

        $post->title = $request->title;
        $post->content = $request->content;
        
        $post->category_id = $request->category_id;

        $post->save();

        $post->tags()->sync($request->input('tag_list'), false);

        
        // Post::create($request->all());
        
        return redirect()->route('posts.index')
                        ->with('success','Post created successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        return view('admin.posts.show',compact('post'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::pluck('name', 'id');
        $tags = Tag::pluck('name', 'id');
        $post = Post::find($id);
        // return the view and pass in the var we previously created
        return view('admin.posts.edit')->withPost($post)->withCategories($categories)->withTags($tags);
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
        // Post::find($id)->update($request->all());
        $post = Post::find($id);;
        $post->title = $request->input('title');
        $post->content = $request->input('content');

        $post->category_id = $request->input('category_id');

        $post->save();
        
        $post->tags()->sync($request->input('tag_list'));

        return redirect()->route('posts.index')
                        ->with('success','Post updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Post::find($id)->delete();
        return redirect()->route('posts.index')
                        ->with('success','Post deleted successfully');
    }
}
