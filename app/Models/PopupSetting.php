<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class PopupSetting extends Model
{
    protected $table = "popup_setting";

    protected $fillable = [
        'key_name', 'key_value',
    ];

    public static function get($key)
    {
        return PopupSetting::whereName($key)->first()->key_value;
    }

    public static function getPopupSetting($key)
    {
        $settings = Arr::pluck(PopupSetting::all()->toArray(), 'key_value', 'key_name');
        return (is_array($key)) ? array_only($settings, $key) : $settings[$key];
    }
}
