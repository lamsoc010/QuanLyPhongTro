<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        // $data['title'] = "hahahahahahh";
        // return view('pages/index', compact('data'));
        return view('admin.pages.index');
    }

    public function handleAdminIndex(Request $request)
    {

        // total users
        $totalUsers = DB::table('users')
            ->select(DB::raw('count(*) as total'))
            ->get();

        // total motels
        $totalMotels = DB::table('motels')
            ->select(DB::raw('count(*) as totalMotels'))
            // ->select(DB::raw('SUM(motels.view) as totalViewMotels'))
            // ->where('posts.status', '1')

            ->get();

        // total posts
        $totalPosts = DB::table('posts')
        ->select(DB::raw('count(*) as totalPosts'))
        // ->select(DB::raw('SUM(posts.view) as totalViewPosts'))

        
            // ->where('posts.status', '1')

            ->get();


        return response()->json([
           'totalUsers' => $totalUsers,
           'totalMotels' => $totalMotels,
           'totalPosts' => $totalPosts,
           
        ]);
    }

    public function user()
    {
        // $data['title'] = "hahahahahahh";
        // return view('pages/index', compact('data'));
        return view('admin.pages.users.listUser');
    }

    public function post()
    {
        // $data['title'] = "hahahahahahh";
        // return view('pages/index', compact('data'));
        return view('admin.pages.posts.newPost');
    }
    public function anyData(Request $request)
    {
        // return Datatables::of(User::query())->make(true);
        $start1 = $request->start;
        $end1 = $request->length;
        $draw = $request->draw;

        // get dataBase
        $users = DB::table('users');
        $totalRecords = $users->count();
        $users = $users
            ->offset($start1)
            ->limit($end1)
            ->get();
        $data1 = [
            "draw" => $request->draw,
            "recordsFiltered" => $totalRecords,
            "recordsTotal" =>  $totalRecords,
            "data" => $users
        ];

        return response()->json($data1);
    }

    public function details(Request $request)
    {

        $idUser = $request->id;

        // get database
        $users = DB::table('users')
            ->where('id', $idUser)
            ->get();

        return  response()->json($users);
    }
    public function getOneUser(Request $request)
    {

        $idUser = $request->id;

        // get database
        $users = DB::table('users')
            ->where('id', $idUser)
            ->get();

        return  response()->json($users);
    }

    public function edit(Request $request)
    {
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
