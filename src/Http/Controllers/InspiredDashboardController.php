<?php

namespace Tetravalence\Inspired\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InspiredDashboardController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // GET /posts/create

        $page = 'inspired::posts.create';

        return view($page);
    }

    public function index()
    {
        return view('home');
    }

    public function template()
    {
        return 'template()';
    }
}
