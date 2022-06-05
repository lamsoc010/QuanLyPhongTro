<?php

namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class MotelController extends Controller
{
    //
    //
    //
    //__________________MOTELS____________________

    public function all_motels()
    {
        return view('clients.all_motels');
    }

    public function handleAllMotels(Request $request)
    {

        // Danh sách  tất cả dãy trọ 
        $listAllMotels = DB::table('motels')
            ->join('users', 'motels.idUser', '=', 'users.id')
            ->select('motels.*', 'users.name as nameUser', 'users.phone', 'users.image as imageUser')
            ->orderBy('motels.created_at', 'desc')
            //  ->limit(5)
            ->get();



        //  Danh sách bài đăng nổi bật
        $listPostsMost = DB::table('posts')
            ->join('users', 'posts.idUser', '=', 'users.id')
            ->join('category', 'posts.idCategory', '=', 'category.id')
            ->select('posts.*', 'users.name as nameUser', 'users.phone', 'users.image as imageUser', 'category.name as nameCategory')
            ->orderBy('posts.views', 'desc')
            ->where('posts.status', '1')
            // ->limit(5)
            ->get();

        return response()->json([
            'listAllMotels' => $listAllMotels,
            // 'listMotelsMost' => $listMotelsMost,
            'listPostsMost' => $listPostsMost
        ]);
    }


    public function detailsMotel()
    {
        return view('clients.details_motel');
    }


    public function handleDetailsMotel(Request $request)
    {
        // dd($request->id);
        $motel = DB::table('motels')
        ->join('users', 'users.id', '=', 'motels.idUser')
        ->where('motels.id', '=', $request->id)
        ->select('motels.*', 'users.name as nameUser', 'users.phone', 'users.image as imageUser')
        ->first();

        // Cập nhập thằng views
        DB::table('motels')
        ->where('id', $request->id)
        ->update(['views' => $motel->views + 1]);

        // Ảnh của dãy trọ
        $image_motels = DB::table('image_motels')
            ->where('idMotels', '=', $motel->id)
            ->get()->all();
        // dd($image_motels);


        // Danh sách dãy trọ nổi bật
        $listMotelsMost = DB::table('motels')
        ->select('motels.*')
        ->orderBy('views', 'desc')
        ->limit(6)
        ->get();
        // dd($listMotelsMost);

        // Danh sách bài đăng nổi bật
        $listPostsMost = DB::table('posts')
        ->join('users', 'posts.idUser', '=', 'users.id')
        ->select('posts.*', 'users.name', 'views')
        ->where('status', '=', '1')
        ->orderBy('views', 'desc')
        ->limit(6)
        ->get();
        // dd($listPostsMost);

        // Danh sách comment
        $listComments = DB::table('comment_motels')
        ->join('users', 'comment_motels.idUser', '=', 'users.id')
        ->select('comment_motels.*','users.id as idUser', 'users.name', 'users.image' )
        ->where('idMotels', '=', $motel->id)
        ->orderBy('comment_motels.created_at', 'desc')
        ->get();
        // dd($listComments);

        $listReplyComments = DB::table('reply_comment_motels')
        ->join('users', 'reply_comment_motels.idUser', '=', 'users.id')
        ->select('reply_comment_motels.*', 'users.name', 'users.image' )
        ->get();

        // dd($listReplyComments);

        return response()->json([
            'motel' => $motel,
            'image_motels' => $image_motels,
            'listMotelsMost' => $listMotelsMost,
            'listPostsMost' => $listPostsMost,
            'listComments' => $listComments,
            'listReplyComments' => $listReplyComments
        ]);
    }

    public function handleReplyComment(Request $request) {
        // insert data in database
        $replyComment = [
            'contents' => $request->contents,
            'idCommentMotels' => $request->idCommentMotels,
            'idUser' => $request->idUser,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ];
        DB::table('reply_comment_motels')->insert($replyComment);
        
        $listReplyComments = DB::table('reply_comment_motels')
        ->get();
        
        return response()->json([
            'replyComment' => $replyComment,
            'listReplyComments' => $listReplyComments
        ]);
    }

    public function handleComment(Request $request) {
        // Xử lý handle comment và check auth xem nếU chưa đăng nhậP thì hiển thị đăng nhập để bình luận
        // dd($request->all());
        // dd((new DateTime())->format('Y-m-d H:i:s'));
        $comment = [
            'contents' => $request->contents,
            'idMotels' => $request->idMotels,
            'idUser' => $request->idUser,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ];
        DB::table('comment_motels')->insert($comment);

        $itemComment = DB::table('comment_motels')
        ->join('users', 'comment_motels.idUser', '=', 'users.id')
        ->select('comment_motels.*','users.id as idUser', 'users.name', 'users.image' )
        ->orderBy('comment_motels.id', 'desc')
        ->first();
        // dd($itemComment);
        
        $countListComment = DB::table('comment_motels')
        ->where('idMotels', '=', $request->idMotels)
        ->count();

        $listReplyComments = [];

        return response()->json([
            'itemComment' => $itemComment,
            'listReplyComments' => $listReplyComments,
            'countListComment' => $countListComment
        ]);
    }
}
