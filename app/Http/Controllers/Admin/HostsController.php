<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class HostsController extends Controller
{
    public function index() {
        return view('admin.pages.hosts.listHost');
    }

    public function anyData(Request $request) {
        $start1 =$request->start;
        $end1 = $request->length;
        $draw = $request->draw;

        // get dataBase
        $users = DB::table('users')
                ->where('role', '=', 'chutro');
        $totalRecords = $users->count();
        $users = $users
        
                ->offset($start1)
                ->limit($end1)
                ->get();
        $data1 = [
            "draw"=> $request->draw,
            "recordsFiltered"=> $totalRecords,
            "recordsTotal"=>  $totalRecords,
            "data" => $users
        ];

        return response()->json($data1);
    }


    
    
}