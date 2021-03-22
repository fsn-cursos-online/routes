<?php


namespace App\Controllers;


class Site
{
    public function home()
    {
        require_once __DIR__ . '/../Views/home.php';
    }
}