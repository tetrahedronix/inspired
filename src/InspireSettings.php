<?php

namespace Tetravalence\Inspire;

use Illuminate\Database\Eloquent\Model;

class InspireSettings extends Model
{
    //
    public $timestamps = false;

    // Specify a custom table by defining this property.
    protected $table = 'settings';

    public static function template()
    {
        $current_vendor = static::where('settings_key', 'vendor')->
            first()->attributes['settings_value'];

        $current_name = static::where('settings_key', 'template')->
            first()->attributes['settings_value'];

        if ( is_string($current_vendor) && is_string($current_name) ) {
            return ['vendor' => $current_vendor, 'name' => $current_name];
        }

        $default_vendor = config('inspire.template.vendor', 'tetravalence');

        $default_name = config('inspire.template.name', 'default');

        return ['vendor' => $default_vendor, 'name' => $default_name];
    }
}
