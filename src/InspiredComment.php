<?php

namespace Tetravalence\Inspired;

use Illuminate\Database\Eloquent\Model;

class InspiredComment extends InspiredModel
{
    /*
    |--------------------------------------------------------------------------
    | Timestamps
    |--------------------------------------------------------------------------
    |
    | If you need to customize the names of the columns used to store the
    | timestamps, you may set the CREATED_AT and UPDATED_AT constants in your
    | model:
    */
    const CREATED_AT = 'comment_date';

    const UPDATED_AT = 'comment_last_update';

    protected $table = 'comments';
}
