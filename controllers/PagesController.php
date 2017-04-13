<?php
namespace App\Controllers;

use App\Core\App;
use Pokemon\Pokemon;

class PagesController
{
    public function index() {
        $cards = Pokemon::Card()->where([
            'page'     => 4,
            'pageSize' => 4
        ])->all();
         return view('index', compact('cards'));
    }
}