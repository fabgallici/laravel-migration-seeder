<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mymovies extends Model
{
    protected $fillable = ['title', 'year', 'overview'];
}
