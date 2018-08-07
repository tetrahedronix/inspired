<?php

namespace Tetravalence\Inspired\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Tetravalence\Inspired\InspiredPost as Post;

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
        $posts = Post::all();

        $page = 'inspired::posts.index';

        return view($page, compact('posts'));
    }

    /**
     * Display a single post page.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        // GET /post/id/{id}
        //$post = Post::find($id);

        $page = 'inspired::posts.single';

        return view($page, compact('post'));
    }

    public function create()
    {
        // GET /post/create

        $page = 'inspired::posts.create';

        return view($page);
    }
}
