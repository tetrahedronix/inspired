<?php

namespace Tetravalence\Inspired;

use Illuminate\Database\Eloquent\Model;

class InspiredSettings extends Model
{
    //
    public $timestamps = false;

    // Specify a custom table by defining this property.
    protected $table = 'settings';

    public function getValue($key)
    {
        $settings_array = $this->where('settings_key', $key)->
            firstOrFail()->toArray();

        return $settings_array['settings_value'];
    }
}
