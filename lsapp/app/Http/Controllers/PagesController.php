<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $heading = 'Welcome to Laravel!';        
        return view('pages/index')->with('heading', $heading); //looks in the pages folder for the index
        //or could write as - return view('pages/index', compact('heading'));
    }

    public function about(){
        $heading = 'About Us';
        return view('pages/about')->with('heading', $heading);
    }

    public function services(){
        $data = [
            'heading' => 'Services',
            'services' => ['Web Design', 'Programming', 'SEO']
        ];
        //or could write as - $data = array();
        return view('pages/services')->with($data);
    }

    public function contact(){
        $heading = 'Contact Us';
        return view('pages/contact')->with('heading', $heading);
    }
}
