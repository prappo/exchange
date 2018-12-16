<?php

namespace App\Http\Controllers;

use App\Settings;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public static function get($key)
    {
        return Settings::where('key', $key)->value('value');

    }

    public static function set($key, $value)
    {
        if (!Settings::where('key', $key)->exists()) {
            $settings = new Settings();
            $settings->key = $key;
            $settings->value = $value;
            $settings->save();

        } else {
            Settings::where('key', $key)->update([
                'value' => $value
            ]);

        }
    }


}
