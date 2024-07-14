<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Ukm extends Authenticatable
{
    use HasFactory;

    protected $table = 'ukms';
    protected $guarded = ['id'];

    public function penguruses() {
        return $this->hasMany(Pengurus::class);
    }

    public function events() {
        return $this->hasMany(Event::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'mendaftars');
    }
}
