<?php

namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use DB;

class HomeController extends Controller
{
    public function index() {
        $listPostsMost = DB::table('posts')
        ->join('users', 'posts.idUser', '=', 'users.id')
        ->join('category', 'posts.idCategory', '=', 'category.id')
        ->select('posts.*', 'users.name as nameUser', 'views','category.name as nameCategory')
        ->where('posts.status', '=', '1')
        ->orderBy('posts.views', 'desc')
        ->get();

        return view('clients.index', compact('listPostsMost'));
    }
    public function handleIndex(Request $request) {
        // Danh sách dãy trọ mới đăng
         $listMotelsNew = DB::table('motels')
         ->join('users', 'motels.idUser', '=', 'users.id')
         ->select('motels.*', 'users.name as nameUser', 'users.phone', 'users.image as imageUser')
         ->orderBy('motels.created_at', 'desc')
         ->limit(5)
         ->get();

         // Danh sách dãy trọ nhiều view
         $listMotelsMost = DB::table('motels')
         ->join('users', 'motels.idUser', '=', 'users.id')
         ->select('motels.*', 'users.name as nameUser', 'users.phone', 'users.image as imageUser')
         ->orderBy('motels.views', 'desc')
         ->get();

        //  Danh sách bài đăng nổi bật
        // $listPostsMost = DB::table('posts')
        // ->join('users', 'posts.idUser', '=', 'users.id')
        // ->join('category', 'posts.idCategory', '=', 'category.id')
        // ->select('posts.*', 'users.name as nameUser', 'users.phone', 'users.image as imageUser', 'category.name as nameCategory')
        // ->orderBy('posts.views', 'desc')
        // ->where('posts.status','1')
        // // ->limit(5)
        // ->get();

        return response()->json([
            'listMotelsNew' => $listMotelsNew,
            'listMotelsMost' => $listMotelsMost,
            // 'listPostsMost' => $listPostsMost
        ]);
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
    public function details(Request $request) {
        return view('clients.details');
        // return redirect()->route('details');
        // Đang bị lỗi chưa xử lý đƯợc phần detail chi tiếT theo id
    }
    public function handleDetails(Request $request) {
        // dd($request->id);
        $motel = DB::table('motels')
        ->join('users', 'users.id', '=', 'motels.idUser')
        ->where('motels.id', '=', $request->id)
        ->select('motels.*', 'users.name as nameUser', 'users.phone', 'users.image as imageUser')
        ->first();
        // dd($motel);

        // Ảnh của dãy trọ
        $image_motels = DB::table('image_motels')
        ->where('idMotels', '=', $motel->id)
        ->get()->all();
        // dd($image_motels);


        // Danh sách dãy trọ nổi bật
        $listMotelsMost = DB::table('motels')
        ->orderBy('motels.views')
        ->select('motels.*')
        ->limit(6)
        ->get();
        // dd($listMotelsMost);

        // Danh sách bài đăng nổi bật
        $listPostsMost = DB::table('posts')
        ->join('users', 'posts.idUser', '=', 'users.id')
        ->select('posts.*', 'users.name', 'views')
        ->where('status', '=', '1')
        ->orderBy('views')
        ->limit(6)
        ->get();
        // dd($listPostsMost);

        // Danh sách comment
        $listComments = DB::table('comment_motels')
        ->join('users', 'comment_motels.idUser', '=', 'users.id')
        ->select('comment_motels.*', 'users.name', 'users.image' )
        ->where('idMotels', '=', $motel->id)
        ->limit(4)
        ->get();
        // dd($listComments);
        return response()->json([
            'motel' => $motel,
            'image_motels' => $image_motels,
            'listMotelsMost' => $listMotelsMost,
            'listPostsMost' => $listPostsMost,
            'listComments' => $listComments
        ]);
    }
        
}
