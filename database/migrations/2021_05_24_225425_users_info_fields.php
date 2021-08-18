<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UsersInfoFields extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('twitter_handle')->nullable();
            $table->string('instagram_handle')->nullable();
            $table->integer('jersey_number')->nullable();
            $table->string('specialist_position')->nullable();
            $table->year('grad_year')->nullable();
            $table->string('state')->nullable();
            $table->string('high_school')->nullable();
            $table->decimal('height', 8, 2)->nullable();
            $table->decimal('weight', 8, 2)->nullable();
            $table->string('other_fb_positions')->nullable();
            $table->string('other_sports')->nullable();
            $table->string('college_degrees_of_interest')->nullable();
            $table->decimal('gpa', 8, 2)->nullable();
            $table->decimal('act', 8, 2)->nullable();
            $table->decimal('sat', 8, 2)->nullable();
            $table->string('ncaa_id')->nullable();
            $table->integer('class_rank')->nullable();
            $table->decimal('class_rank_percentile', 8, 2)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}
