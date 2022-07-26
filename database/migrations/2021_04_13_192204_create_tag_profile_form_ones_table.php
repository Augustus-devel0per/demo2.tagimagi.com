<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTagProfileFormOnesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tag_profile_form_ones', function (Blueprint $table) {
            $table->id();
            $table->string('tag_type')->nullable();
            $table->string('you_are')->nullable();
            $table->string('you_are_a')->nullable();
            $table->string('you_are_in')->nullable();
            $table->string('you_are_from')->nullable();
            $table->string('you_are_interested')->nullable();
            $table->string('you_love')->nullable();
            $table->string('you_have_to_offer')->nullable();
            $table->string('you_have_own')->nullable();
            $table->string('you_are_looking')->nullable();
            $table->string('you_can_contact');
            $table->string('you_can_contact_me_at')->nullable();
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
        Schema::dropIfExists('tag_profile_form_ones');
    }
}
