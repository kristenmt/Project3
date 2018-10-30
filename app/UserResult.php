<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserResult extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'quiz_id'
    ];

    /**
     * Define user table relationship
     *
     * @return object
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * Define user table relationship
     *
     * @return object
     */
    public function quiz()
    {
        return $this->belongsTo('App\Quiz');
    }

}
