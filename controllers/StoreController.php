<?php
namespace App\Controllers;

class StoreController
{
    // Store index
    public function store()
    {
        return view('storeHome');
    }

    //Cart Page
    public function cart()
    {
        return view('cart');
    }

}