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
        // Dãy trọ
        $motel = DB::table('motels')
        ->join('users', 'users.id', '=', 'motels.idUser')
        ->where('motels.id', '=', '7')
        ->select('motels.*', 'users.name', 'users.phone', 'users.image')
        ->first();
        // dd($motel);

        // Ảnh của dãy trọ
        $image_motels = DB::table('image_motels')
        ->where('idMotels', '=', $motel->id)
        ->get()->all();
        // dd($image_motels);


        // Danh sách dãy trọ nổi bật
        $listMotelsMost = DB::table('motels')
        ->join('image_motels', 'motels.id', '=', 'image_motels.idMotels')
        ->orderBy('motels.views')
        ->select('motels.*', 'image_motels.image')
        ->limit(4)
        ->get();
        // dd($listMotelsMost);

        // Danh sách bài đăng nổi bật
        $listPostsMost = DB::table('posts')
        ->join('users', 'posts.idUser', '=', 'users.id')
        ->join('image_posts', 'posts.id', '=', 'image_posts.idPosts')
        ->select('posts.*', 'users.name', 'views', 'image_posts.image')
        ->where('status', '=', '1')
        ->orderBy('views')
        ->limit(4)
        ->get();
        // dd($listPostsMost);

        // Danh sách comment
        $listComments = DB::table('comment_motels')
        ->join('users', 'comment_motels.idUser', '=', 'users.id')
        ->select('comment_motels.*', 'users.name', 'users.image' )
        ->where('idMotels', '=', $motel->id)
        ->limit(5)
        ->get();
        // dd($listComments);
        return view('clients.details', compact('motel', 'listMotelsMost', 'listPostsMost', 'listComments', 'image_motels'));
    }
}
