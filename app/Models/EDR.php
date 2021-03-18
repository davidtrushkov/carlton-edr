<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EDR extends Model
{
    use HasFactory;

    public $table = 'edrs';
    protected $dates = ['date'];

    protected $guarded = [];
    
}
