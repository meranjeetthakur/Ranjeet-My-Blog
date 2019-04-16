<?php

namespace Modules\Blog\Http\Controllers;

use Illuminate\Http\Request;
use Modules\Blog\Entities\Post;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $posts = Post::all();
//        dd($posts);
        return view('blog::index')->with(compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create(Request $request)
    {
        if($request->method() == "POST")
        {
           
            $post = new Post();
            $post->fill($request->all());
            $post->save();
            
            return redirect('/blog')->with(['level' => 'text-success', 'content' => "Post added successfully."]);
        }
        return view('blog::form');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id, Request $request)
    {
        $post = Post::where('id', $id)->first();
        if($request->method() == "POST")
        {
            $post->fill($request->all());
            $post->save();
            
            return redirect('/blog')->with(['level' => 'text-success', 'content' => "Post updated successfully."]);;
        }
        
        return view('blog::form')->with(compact('post'));
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        $post = Post::where('id', $id)->delete();
        
        return redirect('/blog')->with(['level' => 'text-success', 'content' => "Post deleted successfully."]);;
    }
}
