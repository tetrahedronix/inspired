<?php

namespace Tetravalence\Inspired;

use Illuminate\Support\Facades\Request;
use Tetravalence\Inspired\InspiredModel;

class InspiredPost extends InspiredModel
{
    public $timestamps = false;

    protected $table = 'posts';

    public function addComment($comment)
    {
        $this->comments()->create([
            'comment_post_id' => $this->id,
            'comment_body' => $comment->get('comment_body'),
            'comment_author' => $comment->get('comment_author_email'),
            'comment_author_email' => $comment->get('comment_author_email'),
            'comment_author_url' => $comment->get('comment_author_url'),
            'comment_author_ip' => Request::ip(),
        ]);
    }

    public function comments()
    {
        return $this->hasMany('Tetravalence\Inspired\InspiredComment',
            'comment_post_id');
    }

    public function details()
    {
        return $this->hasOne('Tetravalence\Inspired\InspiredPostDetail',
            'post_id', 'id');
    }
}
