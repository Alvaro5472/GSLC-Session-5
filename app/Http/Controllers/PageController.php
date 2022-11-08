<?php
namespace App\Http\Controllers;
class PageController extends Controller{
    public function index(){
        return view('main');
    }
    public function notFound(){
        return view('notFound');
    }
}