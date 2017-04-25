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

    public function card()
    {
        $card = Pokemon::Card()->find($_POST['id']);
        return view('card', compact('card'));
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

    public function sets()
    {
        $sets = Pokemon::Set()->all();
        return view('sets', compact('sets'));
    }

    public function singleSet()
    {
        $cards = Pokemon::Card()->where(['set' => $_POST['id']])->all();
        return view('singleset' , compact('cards'));
    }
}