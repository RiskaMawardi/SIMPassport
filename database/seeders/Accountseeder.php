<?php

namespace Database\Seeders;


use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class Accountseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $akun = [
            [
                'name' => 'riska',
                'email' => 'riska@gmail.com',
                'password' => Hash::make('riska123'),
                'no_hp' => 966443443487,
                'role' => 0,
                'no_kk' => '987878'
            ]
        ];

        foreach ($akun as $key => $value) {
            User::create($value);
        }
    }
}
