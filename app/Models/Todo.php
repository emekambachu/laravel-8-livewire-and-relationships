<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    protected $fillable = [
        'title'
    ];

    public function fields(){
        return $this->hasMany(Field::class, 'todo_id', 'id');
    }
}
