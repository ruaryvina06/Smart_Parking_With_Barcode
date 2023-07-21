<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kendaraan extends Model
{
    use HasFactory;
    protected $table = 'kendaraan';
    protected $guarded = [];

    public function userFK()
    {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }
}
