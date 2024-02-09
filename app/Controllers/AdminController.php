<?php declare(strict_types=1);

namespace App\Controllers;

class AdminController extends Controller 
{
    public function index(){
        return $this -> view ('admin');
    }
}