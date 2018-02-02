<?php

namespace App;

class Doctors extends CustomModel
{

    protected $fillable = ['doc_name', 'doc_surname'];

    public function records()
    {
        return $this->hasMany(Records::class, 'doc_id');
    }
}
