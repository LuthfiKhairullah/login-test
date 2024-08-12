<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $now = date('H');
        $text = 'Selamat';
        if ($now <= 12) {
            $text .= ' Pagi';
        } else {
            $text .= ' Malam';
        }
        $data['email'] = session()->get('email');
        $data['text'] = $text;
        $data['now'] = $now;
        return view('home', $data);
    }
}
