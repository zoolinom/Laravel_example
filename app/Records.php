<?php

namespace App;

class Records extends CustomModel
{

    protected $fillable = ['record_type', 'pat_id', 'doc_id'];

    public function patients()
    {
        return $this->hasMany(Patient::class, 'id', 'pat_id');
    }

    public function doctors()
    {
        return $this->hasMany(Doctors::class, 'id', 'doc_id');
    }

}
