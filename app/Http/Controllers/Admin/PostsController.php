<?php

namespace App\Http\Controllers\Admin;

use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class PostsController extends Controller
{
    // view posts
    public function index() {
        
        return view('admin.pages.posts.listPosts');
    }
    public function post($id) {

        return view('admin.pages.posts.newPost', compact('id'));
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
        ->where('status', '=', '1')
        ->get();

        return response()->json($data);
    }

    // add new post
    public function create(Request $request){
        // validate
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'category' => 'required',
            'content' => 'required',
            'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg,jfif|max:2048',
        ],[
            'title.required' => 'Vui lòng nhập tiêu đề',
            'category.required' => 'Vui lòng chọn danh mục',
            'content.required' => 'Vui lòng nhập nội dung',
            'file.required' => 'Vui lòng chọn ảnh',
            'file.image' => 'Vui lòng chọn file ảnh',
            'file.mimes' => 'Vui lòng chọn file ảnh',
            'file.max' => 'Vui lòng chọn file ảnh',
        
        ]);

        if(!$validator ->passes()){
            
            return response()->json(['error'=>'false','message'=>$validator->errors()]);
            
        }else{
            // get value form request
            $idHost = $request->idHost;
            $title = $request->title;
            $content = $request->content;
            $category = $request->category;
            $status = $request->status;
            $views = $request->views;
            //  $file = $request->file->store('public/uploads');

            $path = 'files/';
            $file = $request->file('file');
            //  set name file with time
            $file_name = time().'_'.$file->getClientOriginalName();
            // $upload = $file->storeAs('public/uploads', $file_name);
            $upload = $file->move(public_path('assets/img/posts'), $file_name);

            if($upload){
                // insert data
                DB::table('posts')->insertGetId([
                    'title' => $title,
                    'content' => $content,
                    'idCategory' => $category,
                    'idUser' => $idHost,
                    'status' => $status,
                    'views' => $views,
                    'image' => $file_name,
                ]);
                
                return response()->json(['code'=> 1 ,'message'=>$upload]);
            }
        }
    }   
}