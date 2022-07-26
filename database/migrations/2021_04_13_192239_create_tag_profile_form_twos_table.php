<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTagProfileFormTwosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tag_profile_form_twos', function (Blueprint $table) {
            $table->id();
            $table->integer('tag_profile_form_one_id')->nullable();
            $table->string('they_are')->nullable();
            $table->string('they_are_a')->nullable();
            $table->string('they_are_in')->nullable();
            $table->string('they_are_by')->nullable();
            $table->string('they_are_interested')->nullable();
            $table->string('they_love')->nullable();
            $table->string('they_have_to_offer')->nullable();
            $table->string('they_have_own')->nullable();
            $table->string('they_are_looking_for')->nullable();
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
        Schema::dropIfExists('tag_profile_form_twos');
    }
}
