<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class Image_postsTS extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $minIdPost = DB::table('posts')->min('id');
        $maxIdPost = DB::table('posts')->max('id');
        $data = [
            [
                'idPosts' => rand($minIdPost, $maxIdPost),
                'image' => 'post2.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'idPosts' => rand($minIdPost, $maxIdPost),
                'image' => 'post3.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'idPosts' => rand($minIdPost, $maxIdPost),
                'image' => 'post4.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'idPosts' => rand($minIdPost, $maxIdPost),
                'image' => 'post5.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'idPosts' => rand($minIdPost, $maxIdPost),
                'image' => 'post6.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'idPosts' => rand($minIdPost, $maxIdPost),
                'image' => 'post7.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'idPosts' => rand($minIdPost, $maxIdPost),
                'image' => 'post3.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'idPosts' => rand($minIdPost, $maxIdPost),
                'image' => 'post4.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'idPosts' => rand($minIdPost, $maxIdPost),
                'image' => 'post5.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'idPosts' => rand($minIdPost, $maxIdPost),
                'image' => 'post6.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'idPosts' => rand($minIdPost, $maxIdPost),
                'image' => 'post7.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
        ];
        DB::table('image_posts')->insert($data);
    }
}
