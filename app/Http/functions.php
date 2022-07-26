<?php

use App\Models\Setting;

if (! function_exists('setting')) {
    function setting() {
        return Setting::where('id', 1)->first();
    }
}