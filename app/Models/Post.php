<?php

namespace App\Models;

use App\Http\Controllers\ComentarioController;
use App\Http\Controllers\LikeController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'descripcion',
        'imagen',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class)->select(['name', 'username']);
    }
    
    public function comentarios()
    {
        return $this->hasMany(ComentarioController::class);
    }

    public function likes()
    {
        return $this->hasMany(LikeController::class);
    }

    public function checkLike(User $user)
    {
        return $this->likes->contains('user_id', $user->id);
    }
}
