<?php

namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return view('clients.index');
    }
    public function category() {
        return view('clients.category');
    }
    public function about() {
        return view('clients.about');
    }
    public function latest_news() {
        return view('clients.latest_news');
    }
    public function contact() {
        return view('clients.contact');
    }
    public function element() {
        return view('clients.element');
    }
    public function blog() {
        return view('clients.blog');
    }
    public function blog_details() {
        return view('clients.single-blog');
    }
    public function details() {
        return view('clients.details');
    }
}
