<?php

namespace Tetravalence\Inspire;

use Illuminate\Database\Eloquent\Model;

class InspireSettings extends Model
{
    //
    public $timestamps = false;

    // Specify a custom table by defining this property.
    protected $table = 'settings';

}
