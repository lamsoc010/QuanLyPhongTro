<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\Motels;
use DB;
class MotelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $minIdUser = DB::table('users')
        ->where('role', '=', 'chutro')
        ->min('id');
        $maxIdUser = DB::table('users')
        ->where('role', '=', 'chutro')
        ->max('id');
        $data = [
            [
                'name' => 'Nhà trọ Đặng Huy Trứ',
                'address' => 'KiệT 5 Đặng Huy Trứ',
                'area' => '150',
                'min_price' => '500000',
                'max_price' => '1500000',
                'room_quantity' => '15',
                'views' => rand(0,10),
                'descreption' => 'HỖ TRỢ GIÁ MÙA DỊCH 2TR/ THÁNG 
                ️ LIÊN HỆ NGAY: 09 16 12 16 90 để đến xem phòng miễn phí 
                ‍ Đối tượng cho thuê: Học sinh, sinh viên, nghiên cứu sinh, người công tác theo dự án 
                ĐỊA CHỈ: 22 Điện Biên Phủ (vị trí không bị ngập lụt, gần trường Quốc Học, đại học Y Dược, Ga Huế, chợ Bến Ngự ) 
                ️ Phòng vệ sinh khép kín 
                ️ #FULL_Đồ: Wifi, Tivi, tủ lạnh, nóng Lạnh, điều Hòa, giường (có sẵn chăn, ga, gối, nệm), tủ quần áo, rèm cửa sổ. 
                ️ Giờ giấc tự do, thoải mái. 
                ️ Có máy giặt, bếp dùng chung (không tính phí) 
                ️ Có Camera an ninh 24/24 
                ️ Chỗ để xe thoải mái, rộng rãi 
                ️ Tiền điện nước tính theo giá nhà nước 
                ️ Có dọn phòng định kỳ theo yêu cầu 
                HỖ TRỢ GIÁ MÙA DỊCH 2TR/ THÁNG 
                ️ LIÊN HỆ NGAY: 09 16 12 16 90 để đến xem phòng miễn phí 
                NGOÀI RA, HIỆN TẠI BÊN CHÚNG TÔI CÓ CHO THUÊ MỘT CĂN HỘ 80M2 GỒM 2 PHÒNG NGỦ, 2 TOILET, 1 PHÒNG BẾP VỚI GIÁ HỖ TRỢ MÙA DỊCH LÀ 5TR/ THÁNG THÍCH HỢP CHO HỘ GIA ĐÌNH VÀ NHÓM HỌC SINH, SINH VIÊN (TỐI ĐA 5 NGƯỜI)',
                'status' => 'Còn phòng',
                'image' => 'motels1.jpg',
                'person' => 'Nam',
                'idUser' => rand($minIdUser, $maxIdUser),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Nhà trọ Dương Văn An',
                'address' => 'Kiệt 71 Dương Văn An',
                'area' => '150',
                'min_price' => '1000000',
                'max_price' => '1500000',
                'room_quantity' => '10',
                'views' => rand(0,10),
                'descreption' => 'HỖ TRỢ GIÁ MÙA DỊCH 2TR/ THÁNG
                ️ LIÊN HỆ NGAY: 09 16 12 16 90 để đến xem phòng miễn phí
                ‍ Đối tượng cho thuê: Học sinh, sinh viên, nghiên cứu sinh, người công tác theo dự án
                ĐỊA CHỈ: 22 Điện Biên Phủ (vị trí không bị ngập lụt, gần trường Quốc Học, đại học Y Dược, Ga Huế, chợ Bến Ngự )
                ️ Phòng vệ sinh khép kín
                ️ #FULL_Đồ: Wifi, Tivi, tủ lạnh, nóng Lạnh, điều Hòa, giường (có sẵn chăn, ga, gối, nệm), tủ quần áo, rèm cửa sổ.
                ️ Giờ giấc tự do, thoải mái.
                ️ Có máy giặt, bếp dùng chung (không tính phí)
                ️ Có Camera an ninh 24/24
                ️ Chỗ để xe thoải mái, rộng rãi
                ️ Tiền điện nước tính theo giá nhà nước
                ️ Có dọn phòng định kỳ theo yêu cầu
                HỖ TRỢ GIÁ MÙA DỊCH 2TR/ THÁNG
                ️ LIÊN HỆ NGAY: 09 16 12 16 90 để đến xem phòng miễn phí
                NGOÀI RA, HIỆN TẠI BÊN CHÚNG TÔI CÓ CHO THUÊ MỘT CĂN HỘ 80M2 GỒM 2 PHÒNG NGỦ, 2 TOILET, 1 PHÒNG BẾP VỚI GIÁ HỖ TRỢ MÙA DỊCH LÀ 5TR/ THÁNG THÍCH HỢP CHO HỘ GIA ĐÌNH VÀ NHÓM HỌC SINH, SINH VIÊN (TỐI ĐA 5 NGƯỜI)',
                'status' => 'Còn phòng',
                'image' => 'motels2.jpg',
                'person' => 'Nam',
                'idUser' => rand($minIdUser, $maxIdUser),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Nhà trọ Trần Phú',
                'address' => '171 Trần Phú',
                'area' => '250',
                'min_price' => '500000',
                'max_price' => '1500000',
                'room_quantity' => '20',
                'views' => rand(0,10),
                'descreption' => 'HỖ TRỢ GIÁ MÙA DỊCH 2TR/ THÁNG
                ️ LIÊN HỆ NGAY: 09 16 12 16 90 để đến xem phòng miễn phí
                ‍ Đối tượng cho thuê: Học sinh, sinh viên, nghiên cứu sinh, người công tác theo dự án
                ĐỊA CHỈ: 22 Điện Biên Phủ (vị trí không bị ngập lụt, gần trường Quốc Học, đại học Y Dược, Ga Huế, chợ Bến Ngự )
                ️ Phòng vệ sinh khép kín
                ️ #FULL_Đồ: Wifi, Tivi, tủ lạnh, nóng Lạnh, điều Hòa, giường (có sẵn chăn, ga, gối, nệm), tủ quần áo, rèm cửa sổ.
                ️ Giờ giấc tự do, thoải mái.
                ️ Có máy giặt, bếp dùng chung (không tính phí)
                ️ Có Camera an ninh 24/24
                ️ Chỗ để xe thoải mái, rộng rãi
                ️ Tiền điện nước tính theo giá nhà nước
                ️ Có dọn phòng định kỳ theo yêu cầu
                HỖ TRỢ GIÁ MÙA DỊCH 2TR/ THÁNG
                ️ LIÊN HỆ NGAY: 09 16 12 16 90 để đến xem phòng miễn phí
                NGOÀI RA, HIỆN TẠI BÊN CHÚNG TÔI CÓ CHO THUÊ MỘT CĂN HỘ 80M2 GỒM 2 PHÒNG NGỦ, 2 TOILET, 1 PHÒNG BẾP VỚI GIÁ HỖ TRỢ MÙA DỊCH LÀ 5TR/ THÁNG THÍCH HỢP CHO HỘ GIA ĐÌNH VÀ NHÓM HỌC SINH, SINH VIÊN (TỐI ĐA 5 NGƯỜI)',
                'status' => 'Còn phòng',
                'image' => 'motels3.jpg',
                'person' => 'All',
                'idUser' => rand($minIdUser, $maxIdUser),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Nhà trọ Điện Biên Phủ',
                'address' => 'KiệT 5 Quảng Tế',
                'area' => '150',
                'min_price' => '500000',
                'max_price' => '1500000',
                'room_quantity' => '15',
                'views' => rand(0,10),
                'descreption' => 'HỖ TRỢ GIÁ MÙA DỊCH 2TR/ THÁNG
                ️ LIÊN HỆ NGAY: 09 16 12 16 90 để đến xem phòng miễn phí
                ‍ Đối tượng cho thuê: Học sinh, sinh viên, nghiên cứu sinh, người công tác theo dự án
                ĐỊA CHỈ: 22 Điện Biên Phủ (vị trí không bị ngập lụt, gần trường Quốc Học, đại học Y Dược, Ga Huế, chợ Bến Ngự )
                ️ Phòng vệ sinh khép kín
                ️ #FULL_Đồ: Wifi, Tivi, tủ lạnh, nóng Lạnh, điều Hòa, giường (có sẵn chăn, ga, gối, nệm), tủ quần áo, rèm cửa sổ.
                ️ Giờ giấc tự do, thoải mái.
                ️ Có máy giặt, bếp dùng chung (không tính phí)
                ️ Có Camera an ninh 24/24
                ️ Chỗ để xe thoải mái, rộng rãi
                ️ Tiền điện nước tính theo giá nhà nước
                ️ Có dọn phòng định kỳ theo yêu cầu
                HỖ TRỢ GIÁ MÙA DỊCH 2TR/ THÁNG
                ️ LIÊN HỆ NGAY: 09 16 12 16 90 để đến xem phòng miễn phí
                NGOÀI RA, HIỆN TẠI BÊN CHÚNG TÔI CÓ CHO THUÊ MỘT CĂN HỘ 80M2 GỒM 2 PHÒNG NGỦ, 2 TOILET, 1 PHÒNG BẾP VỚI GIÁ HỖ TRỢ MÙA DỊCH LÀ 5TR/ THÁNG THÍCH HỢP CHO HỘ GIA ĐÌNH VÀ NHÓM HỌC SINH, SINH VIÊN (TỐI ĐA 5 NGƯỜI)',
                'status' => 'Còn phòng',
                'image' => 'motels4.jpg',
                'person' => 'All',
                'idUser' => rand($minIdUser, $maxIdUser),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Nhà trọ Đặng Hân',
                'address' => '35 Đặng Hân',
                'area' => '150',
                'min_price' => '2000000',
                'max_price' => '3500000',
                'room_quantity' => '12',
                'views' => rand(0,10),
                'descreption' => 'HỖ TRỢ GIÁ MÙA DỊCH 2TR/ THÁNG
                ️ LIÊN HỆ NGAY: 09 16 12 16 90 để đến xem phòng miễn phí
                ‍ Đối tượng cho thuê: Học sinh, sinh viên, nghiên cứu sinh, người công tác theo dự án
                ĐỊA CHỈ: 22 Điện Biên Phủ (vị trí không bị ngập lụt, gần trường Quốc Học, đại học Y Dược, Ga Huế, chợ Bến Ngự )
                ️ Phòng vệ sinh khép kín
                ️ #FULL_Đồ: Wifi, Tivi, tủ lạnh, nóng Lạnh, điều Hòa, giường (có sẵn chăn, ga, gối, nệm), tủ quần áo, rèm cửa sổ.
                ️ Giờ giấc tự do, thoải mái.
                ️ Có máy giặt, bếp dùng chung (không tính phí)
                ️ Có Camera an ninh 24/24
                ️ Chỗ để xe thoải mái, rộng rãi
                ️ Tiền điện nước tính theo giá nhà nước
                ️ Có dọn phòng định kỳ theo yêu cầu
                HỖ TRỢ GIÁ MÙA DỊCH 2TR/ THÁNG
                ️ LIÊN HỆ NGAY: 09 16 12 16 90 để đến xem phòng miễn phí
                NGOÀI RA, HIỆN TẠI BÊN CHÚNG TÔI CÓ CHO THUÊ MỘT CĂN HỘ 80M2 GỒM 2 PHÒNG NGỦ, 2 TOILET, 1 PHÒNG BẾP VỚI GIÁ HỖ TRỢ MÙA DỊCH LÀ 5TR/ THÁNG THÍCH HỢP CHO HỘ GIA ĐÌNH VÀ NHÓM HỌC SINH, SINH VIÊN (TỐI ĐA 5 NGƯỜI)',
                'status' => 'Còn phòng',
                'image' => 'motels2.jpg',
                'person' => 'Nữ',
                'idUser' => rand($minIdUser, $maxIdUser),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Nhà trọ Bình Minh Sáng',
                'address' => '36 Phan Chu Trinh',
                'area' => '150',
                'min_price' => '500000',
                'max_price' => '1500000',
                'room_quantity' => '15',
                'views' => rand(0,10),
                'descreption' => 'HỖ TRỢ GIÁ MÙA DỊCH 2TR/ THÁNG
                ️ LIÊN HỆ NGAY: 09 16 12 16 90 để đến xem phòng miễn phí
                ‍ Đối tượng cho thuê: Học sinh, sinh viên, nghiên cứu sinh, người công tác theo dự án
                ĐỊA CHỈ: 22 Điện Biên Phủ (vị trí không bị ngập lụt, gần trường Quốc Học, đại học Y Dược, Ga Huế, chợ Bến Ngự )
                ️ Phòng vệ sinh khép kín
                ️ #FULL_Đồ: Wifi, Tivi, tủ lạnh, nóng Lạnh, điều Hòa, giường (có sẵn chăn, ga, gối, nệm), tủ quần áo, rèm cửa sổ.
                ️ Giờ giấc tự do, thoải mái.
                ️ Có máy giặt, bếp dùng chung (không tính phí)
                ️ Có Camera an ninh 24/24
                ️ Chỗ để xe thoải mái, rộng rãi
                ️ Tiền điện nước tính theo giá nhà nước
                ️ Có dọn phòng định kỳ theo yêu cầu
                HỖ TRỢ GIÁ MÙA DỊCH 2TR/ THÁNG
                ️ LIÊN HỆ NGAY: 09 16 12 16 90 để đến xem phòng miễn phí
                NGOÀI RA, HIỆN TẠI BÊN CHÚNG TÔI CÓ CHO THUÊ MỘT CĂN HỘ 80M2 GỒM 2 PHÒNG NGỦ, 2 TOILET, 1 PHÒNG BẾP VỚI GIÁ HỖ TRỢ MÙA DỊCH LÀ 5TR/ THÁNG THÍCH HỢP CHO HỘ GIA ĐÌNH VÀ NHÓM HỌC SINH, SINH VIÊN (TỐI ĐA 5 NGƯỜI)',
                'status' => 'Còn phòng',
                'image' => 'motels2.jpg',
                'person' => 'Nam',
                'idUser' => rand($minIdUser, $maxIdUser),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Nhà trọ Hai Thế Hệ',
                'address' => '19 Lê Lợi',
                'area' => '150',
                'min_price' => '500000',
                'max_price' => '1500000',
                'room_quantity' => '15',
                'views' => rand(0,10),
                'descreption' => 'HỖ TRỢ GIÁ MÙA DỊCH 2TR/ THÁNG
                ️ LIÊN HỆ NGAY: 09 16 12 16 90 để đến xem phòng miễn phí
                ‍ Đối tượng cho thuê: Học sinh, sinh viên, nghiên cứu sinh, người công tác theo dự án
                ĐỊA CHỈ: 22 Điện Biên Phủ (vị trí không bị ngập lụt, gần trường Quốc Học, đại học Y Dược, Ga Huế, chợ Bến Ngự )
                ️ Phòng vệ sinh khép kín
                ️ #FULL_Đồ: Wifi, Tivi, tủ lạnh, nóng Lạnh, điều Hòa, giường (có sẵn chăn, ga, gối, nệm), tủ quần áo, rèm cửa sổ.
                ️ Giờ giấc tự do, thoải mái.
                ️ Có máy giặt, bếp dùng chung (không tính phí)
                ️ Có Camera an ninh 24/24
                ️ Chỗ để xe thoải mái, rộng rãi
                ️ Tiền điện nước tính theo giá nhà nước
                ️ Có dọn phòng định kỳ theo yêu cầu
                HỖ TRỢ GIÁ MÙA DỊCH 2TR/ THÁNG
                ️ LIÊN HỆ NGAY: 09 16 12 16 90 để đến xem phòng miễn phí
                NGOÀI RA, HIỆN TẠI BÊN CHÚNG TÔI CÓ CHO THUÊ MỘT CĂN HỘ 80M2 GỒM 2 PHÒNG NGỦ, 2 TOILET, 1 PHÒNG BẾP VỚI GIÁ HỖ TRỢ MÙA DỊCH LÀ 5TR/ THÁNG THÍCH HỢP CHO HỘ GIA ĐÌNH VÀ NHÓM HỌC SINH, SINH VIÊN (TỐI ĐA 5 NGƯỜI)',
                'status' => 'Còn phòng',
                'image' => 'motels5.jpg',
                'person' => 'Nam',
                'idUser' => rand($minIdUser, $maxIdUser),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Nhà trọ Phan Đình Phùng',
                'address' => '35/98 Phan Đình Phùng',
                'area' => '120',
                'min_price' => '500000',
                'max_price' => '800000',
                'room_quantity' => '10',
                'views' => rand(0,10),
                'descreption' => 'HỖ TRỢ GIÁ MÙA DỊCH 2TR/ THÁNG
                ️ LIÊN HỆ NGAY: 09 16 12 16 90 để đến xem phòng miễn phí
                ‍ Đối tượng cho thuê: Học sinh, sinh viên, nghiên cứu sinh, người công tác theo dự án
                ĐỊA CHỈ: 22 Điện Biên Phủ (vị trí không bị ngập lụt, gần trường Quốc Học, đại học Y Dược, Ga Huế, chợ Bến Ngự )
                ️ Phòng vệ sinh khép kín
                ️ #FULL_Đồ: Wifi, Tivi, tủ lạnh, nóng Lạnh, điều Hòa, giường (có sẵn chăn, ga, gối, nệm), tủ quần áo, rèm cửa sổ.
                ️ Giờ giấc tự do, thoải mái.
                ️ Có máy giặt, bếp dùng chung (không tính phí)
                ️ Có Camera an ninh 24/24
                ️ Chỗ để xe thoải mái, rộng rãi
                ️ Tiền điện nước tính theo giá nhà nước
                ️ Có dọn phòng định kỳ theo yêu cầu
                HỖ TRỢ GIÁ MÙA DỊCH 2TR/ THÁNG
                ️ LIÊN HỆ NGAY: 09 16 12 16 90 để đến xem phòng miễn phí
                NGOÀI RA, HIỆN TẠI BÊN CHÚNG TÔI CÓ CHO THUÊ MỘT CĂN HỘ 80M2 GỒM 2 PHÒNG NGỦ, 2 TOILET, 1 PHÒNG BẾP VỚI GIÁ HỖ TRỢ MÙA DỊCH LÀ 5TR/ THÁNG THÍCH HỢP CHO HỘ GIA ĐÌNH VÀ NHÓM HỌC SINH, SINH VIÊN (TỐI ĐA 5 NGƯỜI)',
                'status' => 'Còn phòng',
                'image' => 'motels7.jpg',
                'person' => 'Nam',
                'idUser' => rand($minIdUser, $maxIdUser),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Cư xá Sinh Viên Phú Lợi',
                'address' => '15 Phú Lợi',
                'area' => '150',
                'min_price' => '500000',
                'max_price' => '900000',
                'room_quantity' => '10',
                'views' => rand(0,10),
                'descreption' => 'HỖ TRỢ GIÁ MÙA DỊCH 2TR/ THÁNG
                ️ LIÊN HỆ NGAY: 09 16 12 16 90 để đến xem phòng miễn phí
                ‍ Đối tượng cho thuê: Học sinh, sinh viên, nghiên cứu sinh, người công tác theo dự án
                ĐỊA CHỈ: 22 Điện Biên Phủ (vị trí không bị ngập lụt, gần trường Quốc Học, đại học Y Dược, Ga Huế, chợ Bến Ngự )
                ️ Phòng vệ sinh khép kín
                ️ #FULL_Đồ: Wifi, Tivi, tủ lạnh, nóng Lạnh, điều Hòa, giường (có sẵn chăn, ga, gối, nệm), tủ quần áo, rèm cửa sổ.
                ️ Giờ giấc tự do, thoải mái.
                ️ Có máy giặt, bếp dùng chung (không tính phí)
                ️ Có Camera an ninh 24/24
                ️ Chỗ để xe thoải mái, rộng rãi
                ️ Tiền điện nước tính theo giá nhà nước
                ️ Có dọn phòng định kỳ theo yêu cầu
                HỖ TRỢ GIÁ MÙA DỊCH 2TR/ THÁNG
                ️ LIÊN HỆ NGAY: 09 16 12 16 90 để đến xem phòng miễn phí
                NGOÀI RA, HIỆN TẠI BÊN CHÚNG TÔI CÓ CHO THUÊ MỘT CĂN HỘ 80M2 GỒM 2 PHÒNG NGỦ, 2 TOILET, 1 PHÒNG BẾP VỚI GIÁ HỖ TRỢ MÙA DỊCH LÀ 5TR/ THÁNG THÍCH HỢP CHO HỘ GIA ĐÌNH VÀ NHÓM HỌC SINH, SINH VIÊN (TỐI ĐA 5 NGƯỜI)',
                'status' => 'Còn phòng',
                'image' => 'motels2.jpg',
                'person' => 'Nam',
                'idUser' => rand($minIdUser, $maxIdUser),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        ];
        Motels::insert($data);
    }
}
