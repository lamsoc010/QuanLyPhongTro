<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class CommentMotelsTableSeeder extends Seeder
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
        $minIdMotel = DB::table('motels')->min('id');
        $maxIdMotel = DB::table('motels')->max('id');
        $data = [
            [
                'contents' => 'Đẹp quá',
                'idMotels' => rand($minIdMotel, $maxIdMotel),
                'idUser' => rand($minIdUser, $maxIdUser),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'contents' => 'Trọ này tuyệt vời',
                'idMotels' => rand($minIdMotel, $maxIdMotel),
                'idUser' => rand($minIdUser, $maxIdUser),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'contents' => 'Quá đẹp ạ',
                'idMotels' => rand($minIdMotel, $maxIdMotel),
                'idUser' => rand($minIdUser, $maxIdUser),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'contents' => 'Trọ bẩn quá',
                'idMotels' => rand($minIdMotel, $maxIdMotel),
                'idUser' => rand($minIdUser, $maxIdUser),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'contents' => 'Hơi đắc',
                'idMotels' => rand($minIdMotel, $maxIdMotel),
                'idUser' => rand($minIdUser, $maxIdUser),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
        ];
        DB::table('comment_motels')->insert($data);
    }
}
