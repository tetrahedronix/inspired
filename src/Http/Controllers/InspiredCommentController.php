<?php

namespace Tetravalence\Inspired\Http\Controllers;

use App\Http\Controllers\Controller;
use Tetravalence\Inspired\InspiredComment as Comment;
use Tetravalence\Inspired\InspiredPost as Post;


class InspiredCommentController extends Controller
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
        // GET /comments

        return 'index()';
    }

    /**
     * Display a single post page.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Comment $comment)
    {
        // GET /comments/{id}

        return 'show()';
    }

    public function store(Post $post)
    {
        $post->addComment(request());

        return back();
    }
}
