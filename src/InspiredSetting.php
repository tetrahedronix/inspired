<?php

namespace Tetravalence\Inspired;

use Tetravalence\Inspired\InspiredModel;

class InspiredSetting extends InspiredModel
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
