<?php
namespace App\Controllers;

use App\Core\App;
use Pokemon\Pokemon;

class PagesController
{
    public function index()
    {
        $cards = Pokemon::Card()->where([
            'page'     => 4,
            'pageSize' => 4
        ])->all();
         return view('index', compact('cards'));
    }

    public function about()
    {
        return view('about');
    }

    public function history()
        {
            return view('history');
        }

    public function search()
    {
        $search = Pokemon::Card()->where(['name' => $_POST['searchterm']])->all();
        return view('search', compact('search'));
    }
}