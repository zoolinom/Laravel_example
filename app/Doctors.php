<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctors extends Model
{
    public function records()
    {
        return $this->hasMany(Records::class, 'pat_id');
    }
}
