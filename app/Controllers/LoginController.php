<?php declare(strict_types=1);

namespace App\Controllers;

class LoginController extends Controller 
{
    public function showLoginForm(){
        return $this -> view ('login');
    }
}