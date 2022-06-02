<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class PostsController extends Controller
{
    // view posts
    public function index() {
        return view('admin.pages.posts.listPosts');
    }

    // get all posts with datatable
    public function anyData(Request $request) {
        $start1 =$request->start;
        $end1 = $request->length;
        $draw = $request->draw;

        // get dataBase
        $posts = DB::table('posts');
        $totalRecords = $posts->count();
        $posts = $posts
                ->join('users', 'users.id', '=', 'posts.idUser')
                 ->join('category', 'category.id', '=', 'posts.idCategory')
                 ->select('posts.*', 'users.name as nameUser', 'category.name as category'  )
                ->offset($start1)
                ->limit($end1)
                ->get();
        $data1 = [
            "draw"=> $request->draw,
            "recordsFiltered"=> $totalRecords,
            "recordsTotal"=>  $totalRecords,
            "data" => $posts
        ];

        return response()->json($data1);
    }
    //  getAllNameCategory
    public function getAllNameCategory() {
        $data = DB::table('category')
        ->select('id','name', 'status')
        ->where('status', '=', '0')
        ->get();

        return response()->json($data);
    }

    // add new post
    public function create(Request $request){
        
    }
    
}