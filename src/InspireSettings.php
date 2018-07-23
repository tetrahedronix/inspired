<?php

namespace Tetravalence\Inspire;

use Illuminate\Database\Eloquent\Model;

class InspireSettings extends Model
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
