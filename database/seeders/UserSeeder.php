<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;  // Hash使うなら追記
use Illuminate\Support\Str;           // Str使うなら追記
use App\Models\User;
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
    }
}
