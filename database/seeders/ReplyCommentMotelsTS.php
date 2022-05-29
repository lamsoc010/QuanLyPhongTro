<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ReplyCommentMotelsTS extends Seeder
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
        $minIdConmentMotel = DB::table('comment_motels')->min('id');
        $maxIdConmentMotel = DB::table('comment_motels')->max('id');
        $data = [
            [
                'contents' => 'Đẹp quá',
                'idCommentMotels' => rand($minIdConmentMotel, $maxIdConmentMotel),
                'idUser' => rand($minIdUser, $maxIdUser),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'contents' => 'Đẹp quá trời',
                'idCommentMotels' => rand($minIdConmentMotel, $maxIdConmentMotel),
                'idUser' => rand($minIdUser, $maxIdUser),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'contents' => 'Đẹp quá',
                'idCommentMotels' => rand($minIdConmentMotel, $maxIdConmentMotel),
                'idUser' => rand($minIdUser, $maxIdUser),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'contents' => 'Đẹp quá',
                'idCommentMotels' => rand($minIdConmentMotel, $maxIdConmentMotel),
                'idUser' => rand($minIdUser, $maxIdUser),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
        ];
        DB::table('reply_comment_motels')->insert($data);
    }
}
