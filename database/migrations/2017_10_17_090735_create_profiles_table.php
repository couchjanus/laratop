<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('telephone')->nullable();
            $table->enum('gender', ['m', 'f']);
            $table->date('birthday')->nullable();
            $table->string('image')->nullable();
            $table->string('addressline1')->nullable();
            $table->string('addressline2')->nullable();
            $table->string('postcode')->nullable();
            $table->string('country')->nullable();
            $table->text('bio')->nullable();
            $table->string('twitter_username')->nullable();
            $table->string('github_username')->nullable();
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
        Schema::dropIfExists('profiles');
    }
}
