<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tags', function (Blueprint $table) {
            $table->id();
            $table->string('tag_type')->nullable();
            $table->string('you_are_a')->nullable();
            $table->string('you_are')->nullable();
            $table->string('you_are_in')->nullable();
            $table->string('you_are_from')->nullable();
            $table->string('you_creation_time')->nullable();
            $table->string('you_creation_location')->nullable();
            $table->string('you_are_interested')->nullable();
            $table->string('you_love')->nullable();
            $table->string('you_have_to_offer')->nullable();
            $table->string('you_have_own')->nullable();
            $table->string('you_are_looking')->nullable();
            $table->string('they_are_a')->nullable();
            $table->string('they_are')->nullable();
            $table->string('they_are_in')->nullable();
            $table->string('they_are_by')->nullable();
            $table->string('they_creation_time')->nullable();
            $table->string('they_creation_location')->nullable();
            $table->string('they_are_interested')->nullable();
            $table->string('they_love')->nullable();
            $table->string('they_have_to_offer')->nullable();
            $table->string('they_have_own')->nullable();
            $table->string('they_are_looking_for')->nullable();
            $table->string('offer_is_a')->nullable();
            $table->string('offer_is')->nullable();
            $table->string('offer_is_in')->nullable();
            $table->string('offer_time')->nullable();
            $table->string('offer_provides')->nullable();
            $table->string('offer_needs')->nullable();
            $table->string('offer_has')->nullable();
            $table->string('offer_origin_time')->nullable();
            $table->string('offer_is_by')->nullable();
            $table->string('offer_is_about')->nullable();
            $table->string('offer_is_for')->nullable();
            $table->string('offer_is_to')->nullable();
            $table->string('request_is_a')->nullable();
            $table->string('request_is')->nullable();
            $table->string('request_is_in')->nullable();
            $table->string('request_time')->nullable();
            $table->string('request_provides')->nullable();
            $table->string('request_needs')->nullable();
            $table->string('request_has')->nullable();
            $table->string('request_origin_time')->nullable();
            $table->string('request_is_by')->nullable();
            $table->string('request_is_about')->nullable();
            $table->string('request_is_for')->nullable();
            $table->string('request_is_to')->nullable();
            $table->string('you_can_contact')->nullable();
            $table->string('you_can_contact_me_at')->nullable();
            $table->string('verification_code')->nullable();
            $table->string('profile_website')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tags');
    }
}
