<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserLevel extends Model
{
    protected $guarded = [
        'id'
    ];

    public function getLevelData()
    {
        return $this->belongsTo('App\Level', 'level_rank');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
