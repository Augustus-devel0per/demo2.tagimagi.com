<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = [
        'tag_type',
        'your_names',
        'you_are_a',
        'you_are',
        'you_are_in',
        'you_are_from',
        'you_creation_time',
        'you_creation_location',
        'you_are_interested',
        'you_love',
        'you_have_to_offer',
        'you_have_own',
        'you_are_looking',
        'you_are_like',
        'their_names',
        'they_are_a',
        'they_are',
        'they_are_in',
        'they_are_by',
        'they_creation_time',
        'they_creation_location',
        'they_are_interested',
        'they_love',
        'they_have_to_offer',
        'they_have_own',
        'they_are_looking_for',
        'they_are_like',
        'offer_title',
        'offer_is_a',
        'offer_is',
        'offer_is_in',
        'offer_time',
        'offer_provides',
        'offer_needs',
        'offer_has',
        'offer_origin_time',
        'offer_is_by',
        'offer_is_about',
        'offer_is_like',
        'offer_is_for',
        'offer_is_to',
        'request_title',
        'request_is_a',
        'request_is',
        'request_is_in',
        'request_time',
        'request_provides',
        'request_needs',
        'request_has',
        'request_origin_time',
        'request_is_by',
        'request_is_about',
        'request_is_like',
        'request_is_for',
        'request_is_to',
        'you_can_contact',
        'you_can_contact_me_at',
        'verification_code',
        'profile_website',
    ];
}
