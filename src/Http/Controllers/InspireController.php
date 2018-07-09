<?php

namespace Tetravalence\Inspire\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Tetravalence\Inspire\InspirePost as Post;
use Tetravalence\Inspire\InspireSettings as Settings;

class InspireController extends Controller
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

        $template = Settings::template();

        $page = 'inspire::templates.'.$template['vendor'].
            '.'.$template['name'].'.index';

        return view($page, compact('posts'));
    }
}
