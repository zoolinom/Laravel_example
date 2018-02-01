<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    //added for mass assignable
    protected $fillable = ['pat_name', 'pat_surname', 'jmbg'];

    public function records()
    {
        //return $this->belongsToMany(Patient::class, 'records', 'pat_id', 'id');
        return $this->hasMany(Records::class, 'pat_id');
    }
}
