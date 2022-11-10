<?php
namespace App\Http\Controllers;
class PageController extends Controller{
    public function index(){
        $image = asset('img/Angry Birds Realistic.jpg');
        $title = "Home";
        $header_title = "Looping of An Angry Green Bird";
        return view('mainContent.input', compact('image', 'title', 'header_title'));
    }

    public function notFound(){
        return view('notFound.notFound');
    }
}