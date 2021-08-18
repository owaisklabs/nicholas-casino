<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        // profile fields
        'name', 'last_name', 'user_name', 'email', 'password', 'type', 'isKicker', 'isPunter', 'isLongSnapper',
        'image', 'rating', 'package_id', 'description','package_amount','package_status','agreement_value',
        'package_end_date','user_status',
        // info fields
        'twitter_handle', 'instagram_handle', 'jersey_number', 'specialist_position', 'grad_year', 'state',
        'high_school', 'height', 'weight', 'other_fb_positions', 'other_sports', 'college_degrees_of_interest',
        'gpa', 'act', 'sat', 'ncaa_id', 'class_rank', 'class_rank_percentile',
        // coach fields
        'coach1', 'coach2', 'coach3',
        // senior stats
        'senior_pat_comment', 'senior_fg_longest', 'senior_fg_comment', 'senior_kos', 'senior_ko_total_yardage',
        'senior_ko_average','senior_ko_touchbacks', 'senior_ko_comment', 'senior_punts', 'senior_punt_average',
        'senior_longest_punt', 'senior_punt_total_yardage', 'senior_punt_120', 'senior_punt_comment', 'senior_40_yard_dash',
        'senior_pat_snaps', 'senior_perfect_pat_snaps', 'senior_punt_snaps', 'senior_perfect_punt_snaps',
        // junior stats
        'junior_pat_comment', 'junior_fg_longest', 'junior_fg_comment', 'junior_kos', 'junior_ko_total_yardage',
        'junior_ko_average','junior_ko_touchbacks', 'junior_ko_comment', 'junior_punts', 'junior_punt_average',
        'junior_longest_punt', 'junior_punt_total_yardage', 'junior_punt_120', 'junior_punt_comment', 'junior_40_yard_dash',
        'junior_pat_snaps', 'junior_perfect_pat_snaps', 'junior_punt_snaps', 'junior_perfect_punt_snaps',
        // sophomore stats
        'sophomore_pat_comment', 'sophomore_fg_longest', 'sophomore_fg_comment', 'sophomore_kos', 'sophomore_ko_total_yardage',
        'sophomore_ko_average','sophomore_ko_touchbacks', 'sophomore_ko_comment', 'sophomore_punts', 'sophomore_punt_average',
        'sophomore_longest_punt', 'sophomore_punt_total_yardage', 'sophomore_punt_120', 'sophomore_punt_comment', 'sophomore_40_yard_dash',
        'sophomore_pat_snaps', 'sophomore_perfect_pat_snaps', 'sophomore_punt_snaps', 'sophomore_perfect_punt_snaps',
        // freshman stats
        'freshman_pat_comment', 'freshman_fg_longest', 'freshman_fg_comment', 'freshman_kos', 'freshman_ko_total_yardage',
        'freshman_ko_average','freshman_ko_touchbacks', 'freshman_ko_comment', 'freshman_punts', 'freshman_punt_average',
        'freshman_longest_punt', 'freshman_punt_total_yardage', 'freshman_punt_120', 'freshman_punt_comment', 'freshman_40_yard_dash',
        'freshman_pat_snaps', 'freshman_perfect_pat_snaps', 'freshman_punt_snaps', 'freshman_perfect_punt_snaps',
        // junior days
        'junior_days1', 'junior_days2',
        // offers
        'offers1', 'offers2',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function package()
    {
        return $this->hasMany('App\Models\Package');
    }

    public function star_ratings()
    {
        return $this->hasMany('App\Models\StarRating');
    }

    public function user_videos()
    {
        return $this->hasMany('App\Models\UserVideo');
    }

    public function hudl_user_videos()
    {
        return $this->hasMany('App\Models\UserVideo')->where('category', 'HUDL');
    }

    public function camp_user_videos()
    {
        return $this->hasMany('App\Models\UserVideo')->where('category', 'CAMP');
    }

    public function training_user_videos()
    {
        return $this->hasMany('App\Models\UserVideo')->where('category', 'TRAINING');
    }
}
