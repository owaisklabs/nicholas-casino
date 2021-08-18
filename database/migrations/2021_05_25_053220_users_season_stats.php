<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UsersSeasonStats extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            // senior stats
            $table->longText('senior_pat_comment')->nullable();
            $table->integer('senior_fg_longest')->nullable();
            $table->longText('senior_fg_comment')->nullable();
            $table->integer('senior_kos')->nullable();
            $table->integer('senior_ko_total_yardage')->nullable();
            $table->decimal('senior_ko_average', 8, 2)->nullable();
            $table->integer('senior_ko_touchbacks')->nullable();
            $table->longText('senior_ko_comment')->nullable();
            $table->integer('senior_punts')->nullable();
            $table->decimal('senior_punt_average', 8, 2)->nullable();
            $table->integer('senior_longest_punt')->nullable();
            $table->integer('senior_punt_total_yardage')->nullable();
            $table->integer('senior_punt_120')->nullable();
            $table->longText('senior_punt_comment')->nullable();
            $table->integer('senior_40_yard_dash')->nullable();
            $table->integer('senior_pat_snaps')->nullable();
            $table->decimal('senior_perfect_pat_snaps', 8, 2)->nullable();
            $table->integer('senior_punt_snaps')->nullable();
            $table->decimal('senior_perfect_punt_snaps', 8, 2)->nullable();
            // junior stats
            $table->longText('junior_pat_comment')->nullable();
            $table->integer('junior_fg_longest')->nullable();
            $table->longText('junior_fg_comment')->nullable();
            $table->integer('junior_kos')->nullable();
            $table->integer('junior_ko_total_yardage')->nullable();
            $table->decimal('junior_ko_average', 8, 2)->nullable();
            $table->integer('junior_ko_touchbacks')->nullable();
            $table->longText('junior_ko_comment')->nullable();
            $table->integer('junior_punts')->nullable();
            $table->decimal('junior_punt_average', 8, 2)->nullable();
            $table->integer('junior_longest_punt')->nullable();
            $table->integer('junior_punt_total_yardage')->nullable();
            $table->integer('junior_punt_120')->nullable();
            $table->longText('junior_punt_comment')->nullable();
            $table->integer('junior_40_yard_dash')->nullable();
            $table->integer('junior_pat_snaps')->nullable();
            $table->decimal('junior_perfect_pat_snaps', 8, 2)->nullable();
            $table->integer('junior_punt_snaps')->nullable();
            $table->decimal('junior_perfect_punt_snaps', 8, 2)->nullable();
            // sophomore stats
            $table->longText('sophomore_pat_comment')->nullable();
            $table->integer('sophomore_fg_longest')->nullable();
            $table->longText('sophomore_fg_comment')->nullable();
            $table->integer('sophomore_kos')->nullable();
            $table->integer('sophomore_ko_total_yardage')->nullable();
            $table->decimal('sophomore_ko_average', 8, 2)->nullable();
            $table->integer('sophomore_ko_touchbacks')->nullable();
            $table->longText('sophomore_ko_comment')->nullable();
            $table->integer('sophomore_punts')->nullable();
            $table->decimal('sophomore_punt_average', 8, 2)->nullable();
            $table->integer('sophomore_longest_punt')->nullable();
            $table->integer('sophomore_punt_total_yardage')->nullable();
            $table->integer('sophomore_punt_120')->nullable();
            $table->longText('sophomore_punt_comment')->nullable();
            $table->integer('sophomore_40_yard_dash')->nullable();
            $table->integer('sophomore_pat_snaps')->nullable();
            $table->decimal('sophomore_perfect_pat_snaps', 8, 2)->nullable();
            $table->integer('sophomore_punt_snaps')->nullable();
            $table->decimal('sophomore_perfect_punt_snaps', 8, 2)->nullable();
            // freshman stats
            $table->longText('freshman_pat_comment')->nullable();
            $table->integer('freshman_fg_longest')->nullable();
            $table->longText('freshman_fg_comment')->nullable();
            $table->integer('freshman_kos')->nullable();
            $table->integer('freshman_ko_total_yardage')->nullable();
            $table->decimal('freshman_ko_average', 8, 2)->nullable();
            $table->integer('freshman_ko_touchbacks')->nullable();
            $table->longText('freshman_ko_comment')->nullable();
            $table->integer('freshman_punts')->nullable();
            $table->decimal('freshman_punt_average', 8, 2)->nullable();
            $table->integer('freshman_longest_punt')->nullable();
            $table->integer('freshman_punt_total_yardage')->nullable();
            $table->integer('freshman_punt_120')->nullable();
            $table->longText('freshman_punt_comment')->nullable();
            $table->integer('freshman_40_yard_dash')->nullable();
            $table->integer('freshman_pat_snaps')->nullable();
            $table->decimal('freshman_perfect_pat_snaps', 8, 2)->nullable();
            $table->integer('freshman_punt_snaps')->nullable();
            $table->decimal('freshman_perfect_punt_snaps', 8, 2)->nullable();
            // junior days
            $table->longText('junior_days1')->nullable();
            $table->longText('junior_days2')->nullable();
            // offers
            $table->longText('offers1')->nullable();
            $table->longText('offers2')->nullable();
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
