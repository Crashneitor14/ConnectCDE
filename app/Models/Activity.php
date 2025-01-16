<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{


    use HasFactory;
    //protected $guarded = []; NUNCA HACER FUNCION "($REQUEST->all());

    protected $casts = [
        'date_start' => 'date',
        'date_end' => 'date',
    ];
    public function Report()
    {
        return $this->hasMany(Report::class);
    }
}
