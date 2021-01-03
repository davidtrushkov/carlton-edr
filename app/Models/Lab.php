<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lab extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $dates = ['lab_date'];

    public static function search($search)
    {
        return empty($search) ? static::query()
            : static::where('id', 'like', '%'.$search.'%')
                ->orWhere('eff_ph', 'like', '%'.$search.'%')
                ->orWhere('eff_cond', 'like', '%'.$search.'%');
    }
    
}
