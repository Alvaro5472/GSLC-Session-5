<?php
namespace App\Http\Controllers;
class PageController extends Controller{
    public function index(){
        $image = asset('img/Angry Birds Realistic.jpg');
        $title = "Looping of An Angry Green Bird";
        return view('main', compact('image', 'title'));
    }
    public function notFound(){
        return view('notFound');
    }
}