<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        // $this->load->helper('assets');
        return view('index');
    }
    public function About(): string
    {
        return view('About');
    }
    public function Contact(): string
    {
        return view('Contact');
    }
}
