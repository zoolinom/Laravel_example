<?php

namespace App;

class Patient extends CustomModel
{
    //added for mass assignable
    protected $fillable = ['pat_name', 'pat_surname', 'jmbg'];

    public function records()
    {
        //return $this->belongsToMany(Patient::class, 'records', 'pat_id', 'id');
        return $this->hasMany(Records::class, 'pat_id');
    }
}
