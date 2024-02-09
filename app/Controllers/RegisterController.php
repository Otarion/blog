<?php declare(strict_types=1);

namespace App\Controllers;

class RegisterController extends Controller
{
    public function showRegisterForm() {
        return $this -> view ('register.html');
    }
}
