<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GroupProject extends Model
{
    protected $fillable = ['title', 'description', 'image', 'distance'];
}
