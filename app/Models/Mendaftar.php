<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mendaftar extends Model
{
    use HasFactory;

    protected $table = 'mendaftars';
    protected $guarded = ['id'];
}
