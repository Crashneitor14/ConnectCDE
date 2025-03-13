<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    //protected $guarded = []; NUNCA HACER FUNCION "($REQUEST->all());

    public function likes(){
        return $this->belongsToMany(User::class,'post_like')->withTimestamps();
    }

    public function Post()
    {
        return $this->belongsTo(Cee::class);
    }





}
