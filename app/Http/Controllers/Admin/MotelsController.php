<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class MotelsController extends Controller
{
    public function index() {
        return view('admin.pages.motels.listMotels');
    }

    public function anyData(Request $request) {
        $start1 =$request->start;
        $end1 = $request->length;
        $draw = $request->draw;

        // get dataBase
        $data = DB::table('motels')
        ->join('users', 'users.id', '=', 'motels.idUser')
        ->select('motels.*', 'users.name as nameUser')
        ->get();

        $totalRecords = count($data);

        $data1 = [
            "draw"=> $request->draw,
            "recordsFiltered"=> $totalRecords,
            "recordsTotal"=>  $totalRecords,
            "data" => $data
        ];
        return response()->json($data1);
    }

    public function getAllNameMotels() {
        $data = DB::table('motels')
        ->select('id','name')
        ->get();

        return response()->json($data);
    }
    
    
}