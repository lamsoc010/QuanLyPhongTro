<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class Motels extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $faker = Faker\Factory::create();

        // $limit = 10;

        // for ($i = 0; $i < $limit; $i++) {
        //     DB::table('motels')->insert([
        //         'name' => $faker->name,
        //         'address' => $faker->address,
        //         'area' => $faker->area,
        //         'room_quantity' => $faker->number,
        //         'description' => $faker->description,
        //         'status' => $faker->status,
        //         'idUser' => 1,
        //     ]);
        // }
        DB::table('motels')->insert([
            'name' => 'Nhà trọ Văn Nguyên',
            'address' => 'Kiệt 5, Quảng Tế',
            'area' => '150m2',
            'room_quantity' => 15,
            'descreption' => '- Điện: 3.500/Kw, nước: 100k/ người - Phí quản lý, dịch vụ ( wifi,rác, vệ sinh chung...): 80k/ người - Đầy đủ tiện ích xung quanh, an ninh đảm bảo tuyệt đối',
            'status' => 'Còn phòng',
            'idUser' => 1,
        ]);
    }
}
