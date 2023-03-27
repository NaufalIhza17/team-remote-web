<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;

    protected $table = 'todo';
    protected $primaryKey = 'id_todo';
    protected $fillable = ['nm_todo', 'desc_todo'];
}