<?php declare(strict_types=1);

namespace App\Controllers;

class HomeController extends Controller 
{
    public function index(){
        return $this -> view ('home.html');
    }
}