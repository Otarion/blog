<?php declare(strict_types=1);

namespace App\Controllers;

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

class RegisterController extends Controller
{
    private $twig;

    public function __construct()
    {
        $loader = new FilesystemLoader;
        $this->twig = new Environment($loader);
    }

    public function showRegisterForm() {
        echo $this->twig->render('register.html', []);
    }
}