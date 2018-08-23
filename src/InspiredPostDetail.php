<?php

namespace Tetravalence\Inspired;

use Tetravalence\Inspired\InspiredModel;

class InspiredPostDetail extends InspiredModel
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
    const CREATED_AT = 'post_date';

    const UPDATED_AT = 'post_last_update';

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
    //public $timestamps = false;
}
