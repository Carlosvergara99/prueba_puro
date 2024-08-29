<?php

namespace App\controllers;

use App\config\request as Request;
use App\model\Book;

class BookController
{

    public  function index(){
        return view('book/index');
    }

}