<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class CommentPostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $minIdUser = DB::table('users')->min('id');
        $maxIdUser = DB::table('users')->max('id');
        $minIdPost = DB::table('posts')->min('id');
        $maxIdPost = DB::table('posts')->max('id');
        $data = [
            [
                'contents' => 'Đẹp quá',
                'idPosts' => rand($minIdPost, $maxIdPost),
                'idUser' => rand($minIdUser, $maxIdUser),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'contents' => 'Trọ này tuyệt vời',
                'idPosts' => rand($minIdPost, $maxIdPost),
                'idUser' => rand($minIdUser, $maxIdUser),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'contents' => 'Quá đẹp ạ',
                'idPosts' => rand($minIdPost, $maxIdPost),
                'idUser' => rand($minIdUser, $maxIdUser),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'contents' => 'Trọ bẩn quá',
                'idPosts' => rand($minIdPost, $maxIdPost),
                'idUser' => rand($minIdUser, $maxIdUser),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'contents' => 'Hơi đắc',
                'idPosts' => rand($minIdPost, $maxIdPost),
                'idUser' => rand($minIdUser, $maxIdUser),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
        ];
        DB::table('comment_posts')->insert($data);
    }
}
