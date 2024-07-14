<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengurus extends Model
{
    use HasFactory;

    protected $table = 'penguruses';
    protected $guarded = ['id'];

    public function ukm() {
        return $this->belongsTo(Ukm::class);
    }
}
