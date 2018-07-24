<?php

namespace Tetravalence\Inspired\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Tetravalence\Inspired\InspiredTemplate as Template;
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

        $vendor = Template::getVendor();

        $name = Template::getName();

        $page = 'inspired::templates.'.$vendor.'.'.$name.'.index';

        return view($page, compact('posts'));
    }

    public function show($id)
    {
        $post = Post::find($id);

        $vendor = Template::getVendor();

        $name = Template::getName();

        $page = 'inspired::templates.'.$vendor.'.'.$name.'.single';

        return view($page, compact('post'));
    }
}
