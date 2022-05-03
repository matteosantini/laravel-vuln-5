<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClaraController extends Controller
{
    public function home(){
      dd($_ENV['APP_KEY'], env('APP_KEY'));
    }
}
