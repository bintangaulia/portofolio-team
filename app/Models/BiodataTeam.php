<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BiodataTeam extends Model
{
    protected $table = 'biodatas';
    protected $fillable = ['name', 'birth', 'address', 'phone', 'gender'];
}
