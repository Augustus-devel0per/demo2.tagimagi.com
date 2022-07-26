<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTagProfileFormThreesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tag_profile_form_threes', function (Blueprint $table) {
            $table->id();
            $table->string('tag_type')->nullable();
            $table->string('it_is_a')->nullable();
            $table->string('it_is')->nullable();
            $table->string('it_is_in')->nullable();
            $table->string('it_is_by')->nullable();
            $table->string('it_has')->nullable();
            $table->string('it_is_for')->nullable();
            $table->string('it_needs')->nullable();
            $table->string('it_is_about')->nullable();
            $table->string('you_can_contact');
            $table->string('you_can_contact_at')->nullable();
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
        Schema::dropIfExists('tag_profile_form_threes');
    }
}
