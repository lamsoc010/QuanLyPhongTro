<?php

namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
// use DB;

class HomeController extends Controller
{
    public function index()
    {
        $listPostsMost = DB::table('posts')
            ->join('users', 'posts.idUser', '=', 'users.id')
            ->join('category', 'posts.idCategory', '=', 'category.id')
            ->select('posts.*', 'users.name as nameUser', 'views', 'category.name as nameCategory')
            ->where('posts.status', '=', '1')
            ->orderBy('posts.views', 'desc')
            ->get();

        return view('clients.index', compact('listPostsMost'));
    }
    public function handleIndex(Request $request)
    {
        // Danh sách dãy trọ mới đăng
        $listMotelsNew = DB::table('motels')
            ->join('users', 'motels.idUser', '=', 'users.id')
            ->select('motels.*', 'users.name as nameUser', 'users.phone', 'users.image as imageUser')
            ->orderBy('motels.created_at', 'desc')
            ->limit(5)
            ->get();

        // Danh sách dãy trọ nhiều view
        $listMotelsMost = DB::table('motels')
            ->join('users', 'motels.idUser', '=', 'users.id')
            ->select('motels.*', 'users.name as nameUser', 'users.phone', 'users.image as imageUser')
            ->orderBy('motels.views', 'desc')
            ->get();

        //  Danh sách bài đăng nổi bật
        // $listPostsMost = DB::table('posts')
        // ->join('users', 'posts.idUser', '=', 'users.id')
        // ->join('category', 'posts.idCategory', '=', 'category.id')
        // ->select('posts.*', 'users.name as nameUser', 'users.phone', 'users.image as imageUser', 'category.name as nameCategory')
        // ->orderBy('posts.views', 'desc')
        // ->where('posts.status','1')
        // // ->limit(5)
        // ->get();

        return response()->json([
            'listMotelsNew' => $listMotelsNew,
            'listMotelsMost' => $listMotelsMost,
            // 'listPostsMost' => $listPostsMost
        ]);
    }

    public function category()
    {
        return view('clients.category');
    }
    public function about()
    {
        return view('clients.about');
    }
    public function latest_news()
    {
        return view('clients.latest_news');
    }
    public function contact()
    {
        return view('clients.contact');
    }
    public function element()
    {
        return view('clients.element');
    }
    public function blog()
    {
        return view('clients.blog');
    }
    public function blog_details()
    {
        return view('clients.single-blog');
    }


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
        ->limit(4)
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
            // 'created_at' => (new DateTime())->format('Y-m-d H:i:s'),
            // 'updated_at' => (new DateTime())->format('Y-m-d H:i:s')
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ];
        DB::table('comment_motels')->insert($comment);
        // $itemComment = [
        //     'contents' => $request->contents,
        //     'idMotels' => $request->idMotels,
        //     'idUser' => $request->idUser,
        //     'name' => DB::table('users')->where('id', $request->idUser)->first()->name,
        //     'image' => DB::table('users')->where('id', $request->idUser)->first()->image,
        //     'created_at' => date('Y-m-d H:i:s'),
        //     'updated_at' => date('Y-m-d H:i:s')
        // ];
        $itemComment = DB::table('comment_motels')
        ->join('users', 'comment_motels.idUser', '=', 'users.id')
        ->select('comment_motels.*','users.id as idUser', 'users.name', 'users.image' )
        ->orderBy('comment_motels.id', 'desc')
        ->first();
        // dd($itemComment);
        
        $listReplyComments = [];

        return response()->json([
            'itemComment' => $itemComment,
            'listReplyComments' => $listReplyComments
        ]);
    }

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

        // Ảnh của bài đăng
        $image_posts = DB::table('image_posts')
            ->where('idPosts', '=', $post->id)
            ->get()->all();
        // dd($image_motels);


        // Danh sách dãy trọ nổi bật
        $listMotelsMost = DB::table('motels')
            ->orderBy('motels.views')
            ->select('motels.*')
            ->limit(6)
            ->get();
        // dd($listMotelsMost);

        // Danh sách bài đăng nổi bật
        $listPostsMost = DB::table('posts')
            ->join('users', 'posts.idUser', '=', 'users.id')
            ->select('posts.*', 'users.name', 'views')
            ->where('status', '=', '1')
            ->orderBy('views')
            ->limit(6)
            ->get();
        // dd($listPostsMost);

        // Danh sách comment
        $listComments = DB::table('comment_posts')
            ->join('users', 'comment_posts.idUser', '=', 'users.id')
            ->select('comment_posts.*', 'users.name', 'users.image')
            ->where('idPosts', '=', $post->id)
            ->limit(4)
            ->get();
        // dd($listComments);

         // Danh sách category
         $listCategory = DB::table('posts')
         ->join('category', 'posts.idCategory', '=', 'category.id')
         ->select('category.id','category.name', DB::raw('count(*) as total'))
         ->where('posts.status', '1')
         ->groupBy('category.id','category.name')

         ->get();
        return response()->json([
            'post' => $post,
            'image_posts' => $image_posts,
            'listMotelsMost' => $listMotelsMost,
            'listPostsMost' => $listPostsMost,
            'listComments' => $listComments,
            'listCategory' => $listCategory,
        ]);
    }

    //
    //
    // ----------------------------------------------------------------




}
