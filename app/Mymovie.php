<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mymovie extends Model
{
    protected $fillable = ['title', 'year', 'overview'];
}
