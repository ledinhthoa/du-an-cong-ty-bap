<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data1 = [
            'name' => 'Trinh Ngoc Tuan',
            'email' => 'ngoctuan.qhvn@gmail.com',
            'address' => 'Hai Chau - Da Nang',
            'phoneNumber' => '0904529224',
            'password' => bcrypt('123'),
        ];

        $data2 = [
            'name' => 'Huynh Tan Dai',
            'email' => 'huynhtandai.qhvn@gmail.com',
            'address' => 'Hai Chau - Da Nang',
            'phoneNumber' => '0904529224',
            'password' => bcrypt('123'),
        ];

        $data3 = [
            'name' => 'Lam The Vu',
            'email' => 'lamthevu.qhvn@gmail.com',
            'address' => 'Hai Chau - Da Nang',
            'phoneNumber' => '0904529224',
            'password' => bcrypt('123'),
        ];

        $data4 = [
            'name' => 'Le Dinh Thoa',
            'email' => 'ledinhthoa.qhvn@gmail.com',
            'address' => 'Hai Chau - Da Nang',
            'phoneNumber' => '0904529224',
            'password' => bcrypt('123'),

        ];



        DB::table('users')->insert($data1);
        DB::table('users')->insert($data2);
        DB::table('users')->insert($data3);
        DB::table('users')->insert($data4);


    }
}
