<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'password',
    ];

    protected $primaryKey = 'email';
    public $incrementing = false;
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
    public function likes(){
        return $this->belongsToMany(Post::class,'post_like')->withTimestamps();
    }
    public function PostLike(Post $post){
        return $this->likes()->where('post_id',$post->id)->exists();
    }

    public function Votes()
    {
        return $this->hasMany(Cee::class);
    }

    public function Consult()
    {
        return $this->hasMany(Consult::class);
    }



}
