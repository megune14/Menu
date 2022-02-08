<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;  // Hash使うなら追記
use Illuminate\Support\Str;           // Str使うなら追記
use App\Models\User;
use App\Models\Admin;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            // 挿入データを設定
            [
                'id' => 1,
                'firstname' => '大原',
                'lastname' => '太郎',
                'email' => 'o-hara1@gmail.com',
                'password' => Hash::make('o-haramito'),
                'birthday'=> '2022-01-04'

            ],
            [
                'id' => 2,
                'firstname' => '大原',
                'lastname' => '次郎',
                'email' => 'o-hara2@gmail.com',
                'password' => Hash::make('o-haramito'),
                'birthday'=> '2022-01-04'
            ],
            [
                'id' => 3,
                'firstname' => '大原',
                'lastname' => '三郎',
                'email' => 'o-hara3@gmail.com',
                'password' => Hash::make('o-haramito'),
                'birthday'=> '2022-01-04'
            ]
        ]);

        Admin::insert([
            [
                'id' => 1,
                'name' => '大原太郎',
                'email' => 'o-haraadmin1@gmail.com',
                'shopname' => '大原店1号',
                'address' => '茨城県水戸市',
                'tell' => '00000000000',
                'point' => '0',
                'password' => Hash::make('o-haramito'),
            ],
            [
                'id' => 2,
                'name' => '大原次郎',
                'email' => 'o-haraadmin2@gmail.com',
                'shopname' => '大原店2号',
                'address' => '茨城県水戸市',
                'tell' => '11111111111',
                'point' => '0',
                'password' => Hash::make('o-haramito'),
            ],
            [
                'id' => 3,
                'name' => '大原三郎',
                'email' => 'o-haraadmin3@gmail.com',
                'shopname' => '大原店3号',
                'address' => '茨城県水戸市',
                'tell' => '22222222222',
                'point' => '0',
                'password' => Hash::make('o-haramito'),
            ],
            ]);
    }
}
