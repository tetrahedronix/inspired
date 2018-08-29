<?php

namespace Tetravalence\Inspired;

use Tetravalence\Inspired\InspiredModel;

class InspiredPost extends InspiredModel
{
    public $timestamps = false;

    protected $table = 'posts';

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
