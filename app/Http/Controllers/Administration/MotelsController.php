<?php

namespace App\Http\Controllers\Administration;

use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class MotelsController extends Controller
{
    // view motels
    public function index() {
        
        return view('administration.pages.motels.listMotels');
    }
    // create new motel
    public function createMotel(Request $request) {
        // validate
 
        //   get value form request
         $idUser = $request->id;
         $name = $request->name;
         $address = $request->address;
         $status = $request->status;
         $person = $request->person;
         $views = $request->views;
         $min_pri = $request->min_pri;
         $max_pri= $request->max_pri;
         $descreption = $request->descreption;
         $quantity = $request->quantity;
         $area = $request->area;
 
         $file = $request->file('file');
 
         $file_name = time().'_'.$file->getClientOriginalName();
                 // $upload = $file->storeAs('public/uploads', $file_name);
         $file->move(public_path('assets/img/motels'), $file_name);
       
 
         // insert to database
         DB::table('motels')->insert([
             'idUser' => $idUser,
             'name' => $name,
             'address' => $address,
             'status' => $status,
             'person' => $person,
             'views' => $views,
             'min_price' => $min_pri,
             'max_price' => $max_pri,
             'descreption' => $descreption,
             'room_quantity' => $quantity,
             'area' => $area,
             'image' => $file_name,
         ]);
 
         return response() ->json(['success' => 'Thêm thành công']);
             
             
     }
    public function getAllNameMotels(Request $request) {
        
        $id = $request->idHost;
        $data = DB::table('motels')
        ->where('idUser', '=', $id)
        ->select('id','name')
        ->get();

        return response()->json($data);
    }
    public function anyData(Request $request) {
        
        $start1 =$request->start;
        $end1 = $request->length;
        $draw = $request->draw;

        // filter
        $searchByPrice = $request->searchByPrice;
        $searchBynameMotels = $request->searchBynameMotels;
        $searchBySex = $request->searchBySex;
        $searchByStatus = $request->searchByStatus;


        // query
       // get dataBase
       $data = DB::table('motels')
                    
                ->join('users', 'users.id', '=', 'motels.idUser')
                ->where('idUser', '=', $request->idHost);
               
        if($searchByPrice !=""){
            $data=  $data
                    ->where('min_price', '<',  $searchByPrice + 500000)
                    ->where('min_price', '>=',  $searchByPrice);
        }
        if($searchBynameMotels !=""){
            $data=  $data
            ->where('motels.name', '=', $searchBynameMotels);
        };
        if($searchBySex !=""){
            $data=  $data
            ->where('motels.person', '=', $searchBySex);
        }
        if($searchByStatus !=""){
            $data=  $data
            ->where('motels.status', '=', $searchByStatus);
        }
     
        $data = $data
             ->select('motels.*', 'users.name as nameUser')
             ->get();


        // get dataBase
        // $data = DB::table('motels')
        // ->join('users', 'users.id', '=', 'motels.idUser')
        // ->select('motels.*', 'users.name as nameUser')
        // ->get();

        $totalRecords = count($data);

        $data1 = [
            "draw"=> $request->draw,
            "recordsFiltered"=> $totalRecords,
            "recordsTotal"=>  $totalRecords,
            "data" => $data
        ];
        return response()->json($data1);
    }
   
 
    
}