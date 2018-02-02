<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctors extends Model
{

    protected $fillable = ['doc_name', 'doc_surname'];

    public function records()
    {
        return $this->hasMany(Records::class, 'doc_id');
    }
}
