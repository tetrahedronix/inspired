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
        $default_theme = config('inspire.template', 'default');

        /* $current_theme = DB::table('settings')->
            where('settings_key', 'template')->value('settings_value'); */

        $current_theme = static::where('settings_key', 'template')->
            first()->attributes['settings_value'];

        if (is_null($current_theme) || empty($current_theme)) {
            dd($default_theme);
        }

        return $current_theme;
    }
}
