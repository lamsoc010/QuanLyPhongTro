<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use Carbon\Carbon;

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

            // $year = Carbon::now()->year;
            // dd($year);
        // total users
        $totalUsers = DB::table('users')
            ->select(DB::raw('count(*) as total'))
            ->get();

        // total motels
        $totalMotels = DB::table('motels')
            ->select(DB::raw('count(*) as totalMotels'), DB::raw('SUM(motels.views) as totalViewMotels'))
            // ->where('posts.status', '1')
            ->get();

        // total posts
        $totalPosts = DB::table('posts')
            ->select(DB::raw('count(*) as totalPosts'), DB::raw('SUM(posts.views) as totalViewPosts'))
            // ->where('posts.status', '1')
            ->get();

        //thống kê theo tháng motels
        $MotelInMonth = DB::table('motels')
            ->select(DB::raw('MONTH(motels.created_at) as month'), DB::raw('SUM(motels.views) as views'), DB::raw('count(*) as motelsQuantity'))
            // ->where('YEAR(motels.created_at)','=', $year)
            ->groupBy('month')
            // ->where('posts.status', '1')
            ->get();

        //thống kê theo tháng posts
        $PostInMonth = DB::table('posts')
            ->select(DB::raw('MONTH(posts.created_at) as month'), DB::raw('SUM(posts.views) as views'), DB::raw('count(*) as postsQuantity'))
            // ->where('YEAR(posts.created_at)','=', $year)
            ->groupBy('month')
            // ->where('posts.status', '1')
            ->get();

        return response()->json([
            'totalUsers' => $totalUsers,
            'totalMotels' => $totalMotels,
            'totalPosts' => $totalPosts,
            'MotelInMonth' => $MotelInMonth,
            'PostInMonth' => $PostInMonth,

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
        // dd($request->image);
        $idUser = $request->id;
        
        DB::table('users')
        ->where('id', $idUser)
            ->update([
                'name' => $request->name,
                'email' => $request->email,
                'address' => $request->address,
                'phone' => $request->phone,
                'image' => $request->image,
                'birthday' => $request->birthday,
                'updated_at' => Carbon::now('Asia/Ho_Chi_Minh')
            ]);
            // Lưu ảnh lại và cho vào public khi chỉnh sửa
            // if($request->file('image')) {
            //     $image = $request->file('image');
            //     $name = time() . '.' . $image->getClientOriginalExtension();
            //     $destinationPath = public_path('assets/img/users');
            //     $image->move($destinationPath, $name);
            //     $image = $name;
            //     DB::table('users')
            //         ->where('id', $idUser)
            //         ->update([
            //             'image' => $image,
            //         ]);
            // };
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
            'image' => 'user.jpg',
            // Mã hoá password
            'password' => Hash::make($request->password),
            'role' => $request->role,
            'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
            'updated_at' => Carbon::now('Asia/Ho_Chi_Minh'),
        ]);

        //  return view('admin.pages.users.listUser');
    }
}
