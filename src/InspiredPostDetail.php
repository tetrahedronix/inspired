<?php

namespace Tetravalence\Inspired;

use Illuminate\Database\Eloquent\Model;

class InspiredPostDetail extends Model
{
    /*
    |--------------------------------------------------------------------------
    | Primary Key
    |--------------------------------------------------------------------------
    |
    | Eloquent will also assume that each table has a primary key column
    | named id. You may define a protected $primaryKey property to override
    | this convention.
    */
    protected $primaryKey = 'post_details_id';
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

}
