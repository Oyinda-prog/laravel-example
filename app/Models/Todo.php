<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;
    protected $table='todos';
    protected $fillable=['title','content'];
    protected $primaryKey='todo_id';
    protected $foreignKey='id';
}
