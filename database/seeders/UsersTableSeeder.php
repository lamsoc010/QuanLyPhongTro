<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'Trần Văn Nguyên',
                'email' => 'nguyentran2902@gmail.com',
                'password' => bcrypt('123123123'),
                'phone' => '0989898989',
                'role' => 'user',
                'image' => 'user1.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Dương Văn Huy',
                'email' => 'duongvanhuy137@gmail.com',
                'password' => bcrypt('123123123'),
                'phone' => '0989898989',
                'role' => 'user',
                'image' => 'user2.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Trần Vĩnh Lãm',
                'email' => 'tranvinhlam01@gmail.com',
                'password' => bcrypt('123123123'),
                'phone' => '0989898989',
                'role' => 'chutro',
                'image' => 'user4.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Nguyễn Văn Vũ',
                'email' => 'nguyenvanvu@gmail.com',
                'password' => bcrypt('123123123'),
                'phone' => '0777241999',
                'role' => 'chutro',
                'image' => 'user6.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Phan Tài Tây',
                'email' => 'phantaitay@gmail.com',
                'password' => bcrypt('123123123'),
                'phone' => '0999999999',
                'role' => 'chutro',
                'image' => 'user3.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Phan Tiến Đạt',
                'email' => 'tranvinhlam.it@gmail.com',
                'password' => bcrypt('123123123'),
                'phone' => '0989898989',
                'role' => 'user',
                'image' => 'user5.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Phan Thị Luyền',
                'email' => 'phanthiluyen@gmail.com',
                'password' => bcrypt('123123123'),
                'phone' => '0989898989',
                'role' => 'user',
                'image' => 'user2.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        ];
        User::insert($data);
    }
}
