<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;
class book extends  Model{

    protected $table = 'books';
    protected $fillable = ['title', 'author', 'year'];
    public $timestamps = false;

}


