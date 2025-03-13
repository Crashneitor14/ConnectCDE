<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cee extends Model
{
    use HasFactory;


    public function Votes()
    {
        return $this->hasMany(Vote::class);
    }
    public function Activity()
    {
        return $this->hasMany(Activity::class);
    }
    public function Post()
    {
        return $this->hasMany(Post::class);
    }

}
