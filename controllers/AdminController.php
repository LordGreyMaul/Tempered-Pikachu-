<?php
namespace App\Controllers;

class AdminController
{
public function index()
{
    return view ('admin/index');
}
// List all blogs
public function blog()
{
    return view('admin/blog');
}
// Add blog
public function addblog()
{
    return view('admin/addblog');
}
}