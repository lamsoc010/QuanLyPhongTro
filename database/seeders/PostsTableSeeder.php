<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\Posts;
use DB;

class PostsTableSeeder extends Seeder
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
        $minIdCategory = DB::table('category')->min('id');
        $maxIdCategory = DB::table('category')->max('id');
        $data = [
            [
                'title' => 'So sánh việc tìm phòng trọ trên mạng internet và tìm phòng trọ "kiểu cũ"',
                'content' => 'Xuất hiện đã được gần một thập kỉ, cụm từ “Cách mạng công nghiệp 4.0” ám chỉ về sự thay đổi lớn về cách thế giới vận hành dựa trên sự phát triển của nền tảng khoa học kĩ thuật. Trong thời đại “thế giới mở” hiện nay thì tất cả mọi thứ đều có thể kết nối với nhau qua mạng internet thay thế các phương tiện “xưa cũ” và việc tìm thuê phòng trọ cũng vậy, cũng xuất hiện rất nhiều trên các website
                Trong bài viết này, chúng ta hãy cùng nhau tìm hiểu xem trong thời đại 4.0 thì việc tìm phòng trọ trên internet sẽ như thế nào, sẽ có khác biệt gì so với việc tìm thuê nhà trọ kiểu cũ.
                Những cách tìm thuê phòng trọ hiện nay.
                Nếu như không được người quen giới thiệu cho một địa chỉ uy tín để thuê thì việc tìm nhà trọ cho thuê chủ yếu sẽ được chia làm 2 loại đó là "truyền thống" và "hiện đại".
                Kiểu "truyền thống" là bạn sẽ tự thân đi xe “lòng vòng” và tìm ở các khu vực cho thuê phòng trọ. Ngược lại, với xu thế phát triển công nghệ 4.0 bây giờ thì kiểu “hiện đại” là cách tìm kiếm phòng trọ thông qua các trang mạng internet, website.
                Chúng ta hãy cùng nhau phân tích ưu điểm, nhược điểm của 2 kiểu tìm phòng trọ này để xem rằng liệu nên chọn tìm theo kiểu nào và cần chú ý những gì khi tìm kiếm phòng trọ theo cách đó.',
                'status' => rand(0,1),
                'views' => rand(0,10),
                'idUser' => rand($minIdUser, $maxIdUser),
                'idCategory' => rand($minIdCategory, $maxIdCategory),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'title' => 'Lợi ích khi chọn thuê căn hộ tầng cao mà bạn nên biết',
                'content' => 'Xuất hiện đã được gần một thập kỉ, cụm từ “Cách mạng công nghiệp 4.0” ám chỉ về sự thay đổi lớn về cách thế giới vận hành dựa trên sự phát triển của nền tảng khoa học kĩ thuật. Trong thời đại “thế giới mở” hiện nay thì tất cả mọi thứ đều có thể kết nối với nhau qua mạng internet thay thế các phương tiện “xưa cũ” và việc tìm thuê phòng trọ cũng vậy, cũng xuất hiện rất nhiều trên các website
                Trong bài viết này, chúng ta hãy cùng nhau tìm hiểu xem trong thời đại 4.0 thì việc tìm phòng trọ trên internet sẽ như thế nào, sẽ có khác biệt gì so với việc tìm thuê nhà trọ kiểu cũ.
                Những cách tìm thuê phòng trọ hiện nay.
                Nếu như không được người quen giới thiệu cho một địa chỉ uy tín để thuê thì việc tìm nhà trọ cho thuê chủ yếu sẽ được chia làm 2 loại đó là "truyền thống" và "hiện đại".
                Kiểu "truyền thống" là bạn sẽ tự thân đi xe “lòng vòng” và tìm ở các khu vực cho thuê phòng trọ. Ngược lại, với xu thế phát triển công nghệ 4.0 bây giờ thì kiểu “hiện đại” là cách tìm kiếm phòng trọ thông qua các trang mạng internet, website.
                Chúng ta hãy cùng nhau phân tích ưu điểm, nhược điểm của 2 kiểu tìm phòng trọ này để xem rằng liệu nên chọn tìm theo kiểu nào và cần chú ý những gì khi tìm kiếm phòng trọ theo cách đó.',
                'status' => rand(0,1),
                'views' => rand(0,10),
                'idUser' => rand($minIdUser, $maxIdUser),
                'idCategory' => rand($minIdCategory, $maxIdCategory),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'title' => 'Danh sách 9 vật dụng cần thiết khi ở trọ tân sinh viên nên chuẩn bị',
                'content' => 'Tân sinh viên khi ở trọ thì nên chuẩn bị trước những vật dụng gì để không bỡ ngỡ với cuộc sống xa nhà? Cùng với đó là các câu hỏi khác, xoay quanh việc sắm sửa đồ dùng khi bắt đầu ở trọ của các bạn sinh viên.

                Để giải đáp thắc mắc trên thì sau đây, phongtro123.com sẽ liệt kê danh sách 9 vật dụng cần thiết khi ở trọ. Các bạn tân sinh viên có thể tham khảo, chuẩn bị trước, để sẵn sàng với cuộc sống tự lập xa gia đình.',
                'status' => rand(0,1),
                'views' => rand(0,10),
                'idUser' => rand($minIdUser, $maxIdUser),
                'idCategory' => rand($minIdCategory, $maxIdCategory),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'title' => 'Nên hay không sinh viên chọn thuê căn hộ thay vì nhà trọ',
                'content' => 'Hiện nay nhu cầu tìm thuê chỗ ở tại các thành phố là vô cùng lớn, rất nhiều căn hộ, phòng trọ được xây dựng, yêu cầu về chỗ ở đang ngày càng tăng lên. Rất nhiều người đã lựa chọn thuê những căn hộ có chất lượng cao, đảm bảo, có những tiện ích tốt thay vì thuê nhà trọ đồng giá mà không có những tiện ích hay những chất lượng như căn hộ.

                Và hiện nay không chỉ những người lao động có thu nhập ổn định thuê căn hộ mà có rất nhiều lượng lớn các bạn học sinh, sinh viên đang tìm thuê những căn hộ. Vậy sinh viên thuê căn hộ có thực sự tốt và có nên thuê căn hộ thay vì thuê phòng trọ trọ hay không. Hãy cùng chúng tôi tìm hiểu sau đây',
                'status' => rand(0,1),
                'views' => rand(0,10),
                'idUser' => rand($minIdUser, $maxIdUser),
                'idCategory' => rand($minIdCategory, $maxIdCategory),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'title' => 'Nên hay không sinh viên chọn thuê căn hộ thay vì nhà trọ',
                'content' => 'Hiện nay nhu cầu tìm thuê chỗ ở tại các thành phố là vô cùng lớn, rất nhiều căn hộ, phòng trọ được xây dựng, yêu cầu về chỗ ở đang ngày càng tăng lên. Rất nhiều người đã lựa chọn thuê những căn hộ có chất lượng cao, đảm bảo, có những tiện ích tốt thay vì thuê nhà trọ đồng giá mà không có những tiện ích hay những chất lượng như căn hộ.
                Và hiện nay không chỉ những người lao động có thu nhập ổn định thuê căn hộ mà có rất nhiều lượng lớn các bạn học sinh, sinh viên đang tìm thuê những căn hộ. Vậy sinh viên thuê căn hộ có thực sự tốt và có nên thuê căn hộ thay vì thuê phòng trọ trọ hay không. Hãy cùng chúng tôi tìm hiểu sau đây',
                'status' => rand(0,1),
                'views' => rand(0,10),
                'idUser' => rand($minIdUser, $maxIdUser),
                'idCategory' => rand($minIdCategory, $maxIdCategory),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            

        ];
        Posts::insert($data);
    }
}
