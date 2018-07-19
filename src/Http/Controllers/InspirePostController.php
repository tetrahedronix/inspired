<?php

namespace Tetravalence\Inspire\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Tetravalence\Inspire\Template;
use Tetravalence\Inspire\InspirePost as Post;

class InspirePostController extends Controller
{
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

        $page = 'inspire::templates.'.$vendor.'.'.$name.'.index';

        return view($page, compact('posts'));
    }
}
