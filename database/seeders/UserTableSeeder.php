<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'nip'       => '198111162011011010',
            'name'      => 'Riyen Perdana',
            'email'     => 'riyenperdana@uin-suska.ac.id',
            'password'  => Hash::make('password'),
            'is_aktif'  => 'Y',
            'akses'     => 'adm'
        ]);
    }
}
