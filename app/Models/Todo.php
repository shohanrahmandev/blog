<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'date', 'details', 'user_name'];



    public function comments()
    {
        return $this->hasMany(Comment::class, 'todo_id');
    }


    public function likes()
    {
        return $this->hasMany(Like::class, 'todo_id');
    }
}
