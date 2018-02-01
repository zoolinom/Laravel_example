<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctors extends Model
{
    public function records()
    {
        return $this->hasMany(Records::class, 'doc_id');
    }
}
