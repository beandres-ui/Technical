<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index(): string
    {
        return view('layout/header', ['title' => 'Home'])
            . view('pages/home')
            . view('layout/footer');
    }

    public function about(): string
    {
        return view('layout/header', ['title' => 'About'])
            . view('pages/about')
            . view('layout/footer');
    }
}