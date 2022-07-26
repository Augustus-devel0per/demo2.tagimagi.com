<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TagProfileFormThree extends Model
{

    protected $fillable = [
        'tag_type',
        'it_is_a',
        'it_is',
        'it_is_in',
        'it_is_by',
        'it_has',
        'it_is_for',
        'it_needs',
        'it_is_about',
        'you_can_contact',
        'you_can_contact_at',
    ];
    
}
