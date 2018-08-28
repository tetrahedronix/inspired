<?php

namespace Tetravalence\Inspired\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Tetravalence\Inspired\InspiredPost as Post;
use Tetravalence\Inspired\InspiredPostDetail as PostDetail;

class InspiredPostController extends Controller
{
    public function __construct()
    {
        $this->middleware('web');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // GET /posts

        //$posts = new Post;

        $posts = Post::all();

        // Show details
        $post_details = null;

        // Returns all posts in descendening order:
        //$collection = PostDetail::latest('post_date')->get();
        //$collection = Post::find(1)->details;

        $page = 'inspired::posts.index';

        return view($page, compact('posts', 'post_details'));
    }

    /**
     * Display a single post page.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        // GET /posts/id/{id}
        //$post = Post::find($id);

        $post_details = PostDetail::find($post->id);

        $page = 'inspired::posts.show';

        return view($page, compact('post', 'post_details'));
    }
}
