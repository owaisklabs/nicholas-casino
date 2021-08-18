<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StarRating extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'club_name',
        'last_attended',
        'rating',
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    protected static function boot()
    {
        parent::boot();

        static::created(function ($query) {
            set_average_rating($query);
        });

        static::updated(function ($query) {
            set_average_rating($query);
        });

        static::deleted(function ($query) {
            set_average_rating($query);
        });
    }

}
