<?php

namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PostController extends Controller
{
    //
    //
    //
    //
    //____________________POSTS__________________________

    public function all_posts()
    {
        return view('clients.all_posts');
    }

    public function handleAllPosts(Request $request)
    {

        // Danh sách dãy trọ nhiều view
        $listMotelsMost = DB::table('motels')
            ->join('users', 'motels.idUser', '=', 'users.id')
            ->select('motels.*', 'users.name as nameUser', 'users.phone', 'users.image as imageUser')
            ->orderBy('motels.views', 'desc')
            // ->limit(5)

            ->get();

        //  Danh sách tất cả bài đăng 
        $listAllPosts = DB::table('posts')
            ->join('users', 'posts.idUser', '=', 'users.id')
            ->join('category', 'posts.idCategory', '=', 'category.id')
            ->select('posts.*', 'users.name as nameUser', 'users.phone as phoneUser', 'users.image as imageUser', 'category.name as nameCategory')
            ->orderBy('posts.created_at', 'desc')
            ->where('posts.status', '1')
            ->get();

        // Danh sách category
        $listCategory = DB::table('posts')
            ->join('category', 'posts.idCategory', '=', 'category.id')
            ->select('category.id','category.name', DB::raw('count(*) as total'))
            ->where('posts.status', '1')
            ->groupBy('category.id','category.name')

            ->get();

        // // Tổng bài cho thuê
        // $countAllMotels = DB::table('motels')
        //     ->select('motel.status',DB::raw('count(*) as total'))
        //     ->where('motels .status', 'Còn phòng')
        //     ->get();

        return response()->json([
            'listMotelsMost' => $listMotelsMost,
            'listAllPosts' => $listAllPosts,
            'listCategory' => $listCategory,
            // 'countAllMotels' => $countAllMotels
        ]);
    }

    public function detailsPost(Request $request)
    {
        return view('clients.details_post');
        // return redirect()->route('details');
        // Đang bị lỗi chưa xử lý đƯợc phần detail chi tiếT theo id
    }
    public function handleDetailsPost(Request $request)
    {
        // dd($request->id);
        $post = DB::table('posts')
            ->join('users', 'users.id', '=', 'posts.idUser')
            ->join('category', 'posts.idCategory', '=', 'category.id')
            ->where('posts.id', '=', $request->id)
            ->select('posts.*', 'users.name as nameUser', 'users.phone', 'users.image as imageUser', 'category.name as nameCategory')
            ->first();
        // dd($motel);

        // Cập nhập thằng views
        DB::table('posts')
        ->where('id', $request->id)
        ->update(['views' => $post->views + 1]);

        // Ảnh của bài đăng
        $image_posts = DB::table('image_posts')
            ->where('idPosts', '=', $post->id)
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
        $listComments = DB::table('comment_posts')
            ->join('users', 'comment_posts.idUser', '=', 'users.id')
            ->select('comment_posts.*', 'users.name', 'users.image')
            ->where('idPosts', '=', $post->id)
            ->orderBy('comment_posts.created_at', 'desc')
            ->get();
        // dd($listComments);

         // Danh sách category
         $listCategory = DB::table('posts')
         ->join('category', 'posts.idCategory', '=', 'category.id')
         ->select('category.id','category.name', DB::raw('count(*) as total'))
         ->where('posts.status', '1')
         ->groupBy('category.id','category.name')

         ->get();

        //  Danh sách reply comments
         $listReplyComments = DB::table('reply_comment_posts')
        ->join('users', 'reply_comment_posts.idUser', '=', 'users.id')
        ->select('reply_comment_posts.*', 'users.name', 'users.image' )
        ->get();
         
        return response()->json([
            'post' => $post,
            'image_posts' => $image_posts,
            'listMotelsMost' => $listMotelsMost,
            'listPostsMost' => $listPostsMost,
            'listComments' => $listComments,
            'listCategory' => $listCategory,
            'listReplyComments' => $listReplyComments
        ]);
    }

    public function handleReplyComment(Request $request) {
        // insert data in database
        $replyComment = [
            'contents' => $request->contents,
            'idCommentPosts' => $request->idCommentPosts,
            'idUser' => $request->idUser,
            'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
            'updated_at' => Carbon::now('Asia/Ho_Chi_Minh')
        ];
        DB::table('reply_comment_posts')->insert($replyComment);
        
        $listReplyComments = DB::table('reply_comment_posts')
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
            'idPosts' => $request->idPosts,
            'idUser' => $request->idUser,
            'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
            'updated_at' => Carbon::now('Asia/Ho_Chi_Minh')
        ];
        DB::table('comment_posts')->insert($comment);
        // $itemComment = [
        //     'contents' => $request->contents,
        //     'idMotels' => $request->idMotels,
        //     'idUser' => $request->idUser,
        //     'name' => DB::table('users')->where('id', $request->idUser)->first()->name,
        //     'image' => DB::table('users')->where('id', $request->idUser)->first()->image,
        //     'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
        //     'updated_at' => Carbon::now('Asia/Ho_Chi_Minh')
        // ];
        $itemComment = DB::table('comment_posts')
        ->join('users', 'comment_posts.idUser', '=', 'users.id')
        ->select('comment_posts.*','users.id as idUser', 'users.name', 'users.image' )
        ->orderBy('comment_posts.id', 'desc')
        ->first();
        // dd($itemComment);
        
        $listReplyComments = [];

        $countListComment = DB::table('comment_posts')
        ->where('idPosts', '=', $request->idPosts)
        ->count();

        return response()->json([
            'itemComment' => $itemComment,
            'listReplyComments' => $listReplyComments,
            'countListComment' => $countListComment
        ]);
    }

    //
    //
    // ----------------------------------------------------------------
}
