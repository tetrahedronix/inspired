<?php

namespace Tetravalence\Inspired\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InspiredDashboardController extends Controller
{
    /*public function __construct()
    {
        $this->middleware('auth');
    } */

    public function index()
    {
        return view('home');
    }

    public function template()
    {
        return 'template()';
    }
}
