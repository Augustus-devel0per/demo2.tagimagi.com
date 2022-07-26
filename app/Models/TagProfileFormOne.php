<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TagProfileFormOne extends Model
{

    protected $fillable = [
        'tag_type',
        'you_are',
        'you_are_a',
        'you_are_in',
        'you_are_from',
        'you_are_interested',
        'you_love',
        'you_have_to_offer',
        'you_have_own',
        'you_are_looking',
        'you_can_contact',
        'you_can_contact_me_at',
    ];
    
}
