<?php

namespace Tetravalence\Inspired;

use Tetravalence\Inspired\InspiredSettings as Settings;

class InspiredTemplate
{
    public static function getVendor()
    {
        $current_vendor = Settings::where('settings_key', 'vendor')->
            first()->toArray();

        if (is_string($current_vendor['settings_value'])) {
            return $current_vendor['settings_value'];
        }

        return config('inspire.settings.vendor', 'tetravalence');
    }

    public static function getName()
    {
        $current_name = Settings::where('settings_key', 'template')->
            first()->toArray();

        if (is_string($current_name['settings_value'])) {
            return $current_name['settings_value'];
        }

        return config('inspire.settings.template', 'sandbox');
    }

}
