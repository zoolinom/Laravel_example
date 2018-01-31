<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Records extends Model
{

    public function patients()
    {
        return $this->hasMany(Patient::class, 'id', 'pat_id');
    }

    public function doctors()
    {
        return $this->hasMany(Doctors::class, 'id', 'doc_id');
    }

}
