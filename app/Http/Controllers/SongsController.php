<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SongsController extends Controller
{
    public function index() {
        $data = [
            ['id' => 1, 'name' => "First Music"],
            ['id' => 2, 'name' => "Second Music"],
            ['id' => 3, 'name' => "Third Music"],
            ['id' => 4, 'name' => "Fouth Music"],
            ['id' => 5, 'name' => "Five Music"],
            ['id' => 6, 'name' => "Six Music"],
            ['id' => 7, 'name' => "Seven Music"],
            ['id' => 8, 'name' => "Eight Music"],
            ['id' => 9, 'name' => "Nine Music"],
            ['id' => 10, 'name' => "Ten Music"],
        ];
        return view('songs.index', [
            'songs' => $data
        ]);
    }
}
