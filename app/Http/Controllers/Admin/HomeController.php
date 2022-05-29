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

        // get dataBase
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

    public function details(Request $request)
    {

        $idUser = $request->id;
        
        // get database
        $users = DB::table('users')->where('id', $idUser)->get();
        
        return  response()->json($users);
    }
    public function getOneUser(Request $request)
    {

        $idUser = $request->id;
        
        // get database
        $users = DB::table('users')->where('id', $idUser)->get();
        
        return  response()->json($users);
    }

    public function edit(Request $request){
        $idUser = $request->id;
        DB::table('users')
        ->where('id', $idUser)
        ->update([
            'name' => $request->name,
             'email' => $request->email,
              'address' => $request->address,
               'phone' => $request->phone,
               'birthday' => $request->birthday,

            ]);
    }


    public function create(Request $request)
    {
        // check email exist
        
        
        // insert database
        DB::table('users')->insertGetId([
            'name' => $request->name,
            'email' => $request->email,
            'address' => $request->address,
            'phone' => $request->phone,
            'birthday' => $request->birthday,
            'password' => $request->password,
            'role' => $request->role,
        ]);

        //  return view('admin.pages.users.listUser');
    }
}