<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parkir extends Model
{
    use HasFactory;
    protected $table = 'parkir';
    protected $guarded = [];

    public function userFK()
    {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }
}
