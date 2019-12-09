<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data1 = [
            'usersId' => 1,
            'title' => 'Chung Cư Trung Tâm Thành Phố 35-55-100m2',
            'address' => '123 Dien Bien Phu',
            'area' => 50,
            'contentPost' => 'Dang can tien - Ban gap - Giam gia cho nguoi co thien chi',
            'price' => 5500000,
            'image' => 'imageFolderOfPost1',
        ];

        $data2 = [
            'usersId' => 2,
            'title' => 'Chung Cư Giá Rẻ 150m2, full nội thất',
            'address' => '123 Dien Bien Phu',
            'area' => 70,

            'contentPost' => 'Dang can tien - Ban gap - Giam gia cho nguoi co thien chi',
            'price' => 8000000,
            'image' => 'imageFolderOfPost2',
        ];

        $data3 = [
            'usersId' => 2,
            'title' => 'Chung Cư 2 phòng ngủ, gần cầu rồng',
            'address' => '123 Dien Bien Phu',
            'area' => 90,

            'contentPost' => 'Dang can tien - Ban gap - Giam gia cho nguoi co thien chi',
            'price' => 9500000,
            'image' => 'imageFolderOfPost3',
        ];

        $data4 = [
            'usersId' => 2,
            'title' => '18 hecta đất rẫy ở Tân Thuận huyện Hàm Thuận Nam',
            'address' => '123 Dien Bien Phu',
            'area' => 500,

            'contentPost' => 'Dang can tien - Ban gap - Giam gia cho nguoi co thien chi',
            'price' => 9000000,
            'image' => 'imageFolderOfPost4',
        ];

        $data5 = [
            'usersId' => 2,
            'title' => 'Căn hộ Ngay Vincom Quận 2, 80m² 2PN, nhận nhà ngay',
            'address' => '123 Dien Bien Phu',
            'area' => 500,

            'contentPost' => 'Dang can tien - Ban gap - Giam gia cho nguoi co thien chi',
            'price' => 13000000,
            'image' => 'imageFolderOfPost5',
        ];

        $data6 = [
            'usersId' => 2,
            'title' => 'Bán nhà mt căn góc đường số 5 chợ Bà Hom 6,5mx18m',
            'address' => '123 Dien Bien Phu',
            'area' => 500,

            'contentPost' => 'Dang can tien - Ban gap - Giam gia cho nguoi co thien chi',
            'price' => 23000000,
            'image' => 'imageFolderOfPost6',
        ];

        $data7 = [
            'usersId' => 2,
            'title' => 'MỞ BÁN NHÀ MẶT TIỀN ĐƯỜNG SỐ 6, KHU ĐÔ THỊ 5A',
            'address' => '123 Dien Bien Phu',
            'area' => 500,

            'contentPost' => 'Dang can tien - Ban gap - Giam gia cho nguoi co thien chi',
            'price' => 35000000,
            'image' => 'imageFolderOfPost7',
        ];


        DB::table('posts')->insert($data1);
        DB::table('posts')->insert($data2);
        DB::table('posts')->insert($data3);
        DB::table('posts')->insert($data4);
        DB::table('posts')->insert($data5);
        DB::table('posts')->insert($data6);
        DB::table('posts')->insert($data7);




    }
}
