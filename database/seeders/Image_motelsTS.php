<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class Image_motelsTS extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $minIdMotel = DB::table('motels')->min('id');
        $maxIdMotel = DB::table('motels')->max('id');
        $data = [
            [
                'idMotels' => rand($minIdMotel, $maxIdMotel),
                'image' => 'motels1.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'idMotels' => rand($minIdMotel, $maxIdMotel),
                'image' => 'motels2.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'idMotels' => rand($minIdMotel, $maxIdMotel),
                'image' => 'motels3.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'idMotels' => rand($minIdMotel, $maxIdMotel),
                'image' => 'motels4.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'idMotels' => rand($minIdMotel, $maxIdMotel),
                'image' => 'motels5.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'idMotels' => rand($minIdMotel, $maxIdMotel),
                'image' => 'motels6.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'idMotels' => rand($minIdMotel, $maxIdMotel),
                'image' => 'motels7.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'idMotels' => rand($minIdMotel, $maxIdMotel),
                'image' => 'motels8.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'idMotels' => rand($minIdMotel, $maxIdMotel),
                'image' => 'motels9.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'idMotels' => rand($minIdMotel, $maxIdMotel),
                'image' => 'motels4.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'idMotels' => rand($minIdMotel, $maxIdMotel),
                'image' => 'motels5.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'idMotels' => rand($minIdMotel, $maxIdMotel),
                'image' => 'motels6.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'idMotels' => rand($minIdMotel, $maxIdMotel),
                'image' => 'motels7.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'idMotels' => rand($minIdMotel, $maxIdMotel),
                'image' => 'motels8.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'idMotels' => rand($minIdMotel, $maxIdMotel),
                'image' => 'motels9.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'idMotels' => rand($minIdMotel, $maxIdMotel),
                'image' => 'motels5.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'idMotels' => rand($minIdMotel, $maxIdMotel),
                'image' => 'motels6.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'idMotels' => rand($minIdMotel, $maxIdMotel),
                'image' => 'motels7.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'idMotels' => rand($minIdMotel, $maxIdMotel),
                'image' => 'motels8.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'idMotels' => rand($minIdMotel, $maxIdMotel),
                'image' => 'motels9.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'idMotels' => rand($minIdMotel, $maxIdMotel),
                'image' => 'motels9.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'idMotels' => rand($minIdMotel, $maxIdMotel),
                'image' => 'motels4.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'idMotels' => rand($minIdMotel, $maxIdMotel),
                'image' => 'motels5.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'idMotels' => rand($minIdMotel, $maxIdMotel),
                'image' => 'motels6.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'idMotels' => rand($minIdMotel, $maxIdMotel),
                'image' => 'motels7.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'idMotels' => rand($minIdMotel, $maxIdMotel),
                'image' => 'motels8.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'idMotels' => rand($minIdMotel, $maxIdMotel),
                'image' => 'motels9.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'idMotels' => rand($minIdMotel, $maxIdMotel),
                'image' => 'motels5.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'idMotels' => rand($minIdMotel, $maxIdMotel),
                'image' => 'motels6.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'idMotels' => rand($minIdMotel, $maxIdMotel),
                'image' => 'motels7.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'idMotels' => rand($minIdMotel, $maxIdMotel),
                'image' => 'motels8.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'idMotels' => rand($minIdMotel, $maxIdMotel),
                'image' => 'motels9.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
        ];
        DB::table('image_motels')->insert($data);
    }
}
