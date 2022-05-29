<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class ReplyCommentPostTS extends Seeder
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
        $minIdConmentPost = DB::table('comment_posts')->min('id');
        $maxIdConmentPost = DB::table('comment_posts')->max('id');
        $data = [
            [
                'contents' => 'Đẹp quá',
                'idCommentPosts' => rand($minIdConmentPost, $maxIdConmentPost),
                'idUser' => rand($minIdUser, $maxIdUser),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'contents' => 'Đẹp quá trời',
                'idCommentPosts' => rand($minIdConmentPost, $maxIdConmentPost),
                'idUser' => rand($minIdUser, $maxIdUser),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'contents' => 'Đẹp quá',
                'idCommentPosts' => rand($minIdConmentPost, $maxIdConmentPost),
                'idUser' => rand($minIdUser, $maxIdUser),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'contents' => 'Đẹp quá',
                'idCommentPosts' => rand($minIdConmentPost, $maxIdConmentPost),
                'idUser' => rand($minIdUser, $maxIdUser),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
        ];
        DB::table('reply_comment_posts')->insert($data);
    }
}
