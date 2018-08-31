<?php

namespace Tetravalence\Inspired\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Tetravalence\Inspired\InspiredPost as Post;
use Tetravalence\Inspired\InspiredPostDetail as PostDetail;

class InspiredDashboardPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();

        return view('inspired-dashboard::index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // GET /posts/create

        $page = 'inspired-dashboard::create';

        return view($page);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*
        |-----------------------------------------------------------------------
        | Validation
        |-----------------------------------------------------------------------
        | accepted The field under validation must be yes, on, 1, or true.
        |          This is useful for validating "Terms of Service" acceptance.
        | after:date The field under validation must be a value after a given
        |            date.
        | after_or_equal:date The field under validation must be a value after
        |                or equal to the given date.
        | alpha_dash The field under validation may have alpha-numeric
        |            characters, as well as dashes and underscores.
        | in The field under validation must be included in the given list of
        |    values.
        | min:value The field under validation must have a minimum value.
        | max:value The field under validation must be less than or equal to a
        |           maximum value.
        | nullable The field under validation may be null.
        | numeric The field under validation must be numeric.
        | required The field under validation must be present in the input data
        |          and not empty.
        | string The field under validation must be a string.
        */
        $this->validate(request(), [
            'post_title' => 'required|min:1|max:512',
            'post_type' => 'required|string|in:article,page',
            'post_status' => 'required|string|in:draft,pending,published',
            'post_body' => 'present|nullable',
            'post_discuss_status' => 'required|in:open,closed',
            'post_excerpt' => 'present|nullable',
            'post_protected' => 'required|string|in:yes,no',
            'post_parent' => 'required|numeric',
            'post_slug' => 'present|alpha_dash',
            'post_metakeys' => 'present|alpha_num',
        ]);

        // Create a new Post using the request data
        $post = new Post;

        // Fill the posts table with the request data
        $post->post_uid = $request->user()->id;
        $post->post_title = request('post_title');
        $post->post_type = request('post_type');
        $post->post_status = request('post_status');

        // Save it to the database
        $post->save();

        // Create a new PostDetail using the request data
        $post_detail = new PostDetail;

        // Fill the post_details table with the request data

        // Get latest saved post id
        $post_detail->post_id = Post::where('post_uid', $post->post_uid)->
            orderBy('id', 'desc')->first()->id;

        if (empty(request('post_body'))) {
            $post_detail->post_body = '';
        } else {
            $post_detail->post_body = request('post_body');
        }

        $post_detail->post_discuss_status = 'open';

        if (empty(request('post_excerpt'))) {
            $post_detail->post_excerpt = '';
        } else {
            $post_detail->post_excerpt = request('post_excerpt');
        }

        $post_detail->post_protected = request('post_protected');
        $post->post_uid = $request->user()->id;
        // to validate further
        $post_detail->post_parent = request('post_parent');
        $post_detail->post_slug = request('post_slug');

        if ( empty(request('post_metakeys'))) {
            $post_detail->post_metakeys = '';
        } else {
            $post_detail->post_metakeys = request('post_metakeys');
        }

        // Save it to the database
        $post_detail->save();

        // Redirect
        return redirect('/dashboard/posts');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        // GET /posts/{post}

        $page = 'inspired-dashboard::show';

        return view($page);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
