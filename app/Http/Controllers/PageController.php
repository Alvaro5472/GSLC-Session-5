<?php
namespace App\Http\Controllers;
class PageController extends Controller{
    public function index(){
        $image = asset('img/Angry Birds Realistic.jpg');
        $header_title = "Looping of An Angry Green Bird";
        $title = "Home";
        return view('main', compact('image', 'header_title', 'title'));
    }
    public function notFound(){
        return view('notFound');
    }
}