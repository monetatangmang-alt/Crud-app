<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    // Create Model
    use HasFactory;

    protected $fillable = [
        'name',
        'age',
        'position',
        'salary',
    ];
}
