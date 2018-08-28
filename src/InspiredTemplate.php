<?php

namespace Tetravalence\Inspired;

use Tetravalence\Inspired\InspiredSetting as Settings;
use Illuminate\Support\Facades\File;

class InspiredTemplate
{
    public static function createLink()
    {
        $public_resources = public_path().
            '/vendor/'.static::getVendor();

        $package_resources = base_path().
            '/vendor/tetravalence/inspired/resources/views'. static::getTheme();

        $file_check = File::exists($public_resources.'/assets');
        $link_check = is_link($public_resources.'/assets');

        // 1. Link exists but it's broken
        if ($link_check && (! $file_check)) {
            unlink($public_resources.'/assets');
            symlink($package_resources.'/assets', $public_resources.'/assets');
            // Stop.
            return;
        }

        //2. Link exists and it's OK
        // Previously validated by validateLink()

        //3. Link does not exist
        if (! $link_check) {
            // Make parent directories as needed
            File::makeDirectory(
                $public_resources,
                $mode = 0755,
                $recursive = true,
                $force = true
            );
            symlink($package_resources.'/assets', $public_resources.'/assets');
        }
    }

    protected static function getName()
    {
        $current_name = Settings::where('settings_key', 'template')->
            first()->toArray();

        if (is_string($current_name['settings_value'])) {
            return $current_name['settings_value'];
        }

        return config('inspire.settings.template', 'sandbox');
    }

    public static function getTheme()
    {
        $vendor = static::getVendor();

        $name = static::getName();

        $theme = '/templates/'.$vendor.'/'.$name.'/';

        return $theme;
    }

    protected static function getVendor()
    {
        $current_vendor = Settings::where('settings_key', 'vendor')->
            first()->toArray();

        if (is_string($current_vendor['settings_value'])) {
            return $current_vendor['settings_value'];
        }

        return config('inspire.settings.vendor', 'tetravalence');
    }

    public static function validateLink()
    {
        $public_resources = public_path().
            '/vendor/'.static::getVendor().'/assets';

        return File::exists($public_resources) && is_link($public_resources) ?
            $public_resources : false;
    }
}
