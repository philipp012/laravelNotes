<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index () {
        $title = 'Notes Application';
        return view('pages.index')->with('title', $title);
    }

    public function about() {
        $about = 'Notes About';
        return view('pages.about')->with('title', $about);
    }

    public function services() {
        $data = array(
            'title' => 'Notes Services',
            'services' => ['Web Design', 'Programming', 'SEO']
        );
        return view('pages.services')->with($data);
    }
}
