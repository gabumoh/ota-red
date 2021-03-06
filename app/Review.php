<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];
    protected $table = 'reviews';

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    public function response()
    {
        return $this->hasMany(ReviewResponse::class, 'review_id');
    }
}