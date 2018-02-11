<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Records extends Model
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

    public function scopeFilter($query, $filters)
    {
        if (empty($filters))
        {
            return;
        }

        if ($month = $filters['month'])
        {
            $query->whereMonth('created_at', Carbon::parse($month)->month);
        }

        if ($year = $filters['year'])
        {
            $query->whereYear('created_at', Carbon::parse($year)->year);
        }
    }

    public static function archives()
    {
        return static::selectRaw('year(created_at) year, monthname(created_at) month, count(*) published')
            ->groupBy('year', 'month')
            ->orderByRaw('min(created_at) desc')
            ->get()
            ->toArray();
    }

}
