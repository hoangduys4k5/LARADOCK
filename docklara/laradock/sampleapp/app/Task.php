<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Task extends Model
{
    use HasFactory;

    protected $table = 'tasks';
    protected $fillable = ['name','content'];
}
