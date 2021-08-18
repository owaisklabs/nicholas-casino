<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStarRatingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('star_ratings', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable();
            $table->string('club_name')->nullable();
            $table->date('last_attended')->nullable();
            $table->decimal('rating', 8, 2)->nullable();
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
        Schema::dropIfExists('star_ratings');
    }
}
