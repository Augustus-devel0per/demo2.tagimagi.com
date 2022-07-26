<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = ['logo', 'white_logo', 'website_name', 'description', 'phone', 'address', 'email', 'working_hours', 'map_key', 'twitter', 'facebook', 'google', 'linkedin', 'instagram', 'footer_text', 'service_height', 'map_active', 'top_bar_heading', 'working_hour_content', 'service_banner_heading', 'service_banner_content', 'service_banner_bg'];
}
