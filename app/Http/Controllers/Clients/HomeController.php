<?php

namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

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
        $motels = DB::table('motels')->get()
        ->where('id', '=', '1');
        
        $users = DB::table('users')
            ->join('motels', 'users.id', '=', 'motels.idUser')
            ->select('users.*')
            ->get();
        // dd($users);
        return view('clients.details', compact('motels','users'));
    }
}
