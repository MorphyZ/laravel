<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function showIndex()
    {
        return view('home');
    }
    public function showArray()
    {
        $array = [
            ['id' => 1, 'title' => 'Картинка 1', 'price' => 500, 'path' => 'resources/images/1644940641_1-fikiwiki-com-p-ucheba-krasivie-kartinki-1.jpg'],
            ['id' => 2, 'title' => 'Картинка 2', 'price' => 600, 'path' => 'resources/images/1644940567_4-fikiwiki-com-p-ucheba-krasivie-kartinki-4.jpg'],
        ];

        return view('array', compact('array'));
    }
}
