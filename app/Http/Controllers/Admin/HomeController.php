<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class HomeController extends Controller
{
    public function index() {
        // $data['title'] = "hahahahahahh";
        // return view('pages/index', compact('data'));
        return view('admin.pages.index');
    }

    public function user() {
        // $data['title'] = "hahahahahahh";
        // return view('pages/index', compact('data'));
        return view('admin.pages.users.listUser');
    }
    
    public function post() {
        // $data['title'] = "hahahahahahh";
        // return view('pages/index', compact('data'));
        return view('admin.pages.posts.newPost');
    }
    public function anyData(Request $request)
    {
        // return Datatables::of(User::query())->make(true);
        $start1 =$request->start;
        $end1 = $request->length;
        $draw = $request->draw;
        $users = DB::table('users');
        $totalRecords = $users->count();
        $users = $users->offset($start1)->limit($end1)->get();
        $data1 = [
            "draw"=> $request->draw,
            "recordsFiltered"=> $totalRecords,
            "recordsTotal"=>  $totalRecords,
            "data" => $users
        ];
        return response()->json($data1);
    }
}