<?php


use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    public function run(){
        DB::table('users')->truncate();

        User::create([
          'name' => 'admin',
          'email' => 'admin@teste.com.br',
          'password' => '1234'
        ]);

        User::create([
            'name' => 'root',
            'email' => 'root@teste.com.br',
            'password' => '1234'
        ]);
    }
}