<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    public function records()
    {
        return $this->hasMany(Records::class, 'pat_id');
    }
}
