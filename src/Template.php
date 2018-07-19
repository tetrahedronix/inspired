<?php

namespace Tetravalence\Inspire;

use Tetravalence\Inspire\InspireSettings as Settings;

class Template
{
    public static function getVendor()
    {
        $current_vendor = Settings::where('settings_key', 'vendor')->
            first()->attributes['settings_value'];

        if (is_string($current_vendor)) {
            return $current_vendor;
        }

        return config('inspire.template.vendor', 'tetravalence');
    }

    public static function getName()
    {
        $current_name = Settings::where('settings_key', 'template')->
            first()->attributes['settings_value'];

        if (is_string($current_name)) {
            return $current_name;
        }

        return config('inspire.template.name', 'default');
    }

}
