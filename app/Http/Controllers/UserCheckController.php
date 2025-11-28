<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserCheckController extends Controller
{
     public function check()
    {
        return view('index_page');   // this will load check-user.blade.php
    }
}
