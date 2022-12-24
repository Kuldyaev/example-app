<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class UsersSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            [
                'name'=>'admin',
                'email'=>'admin@admin.ru',
                'password'=>'$2y$10$lJ4.biQAyLvwGg81Ef.obOCf0IIPJ0C3L7fyNcb.EKhhhW74tia9a',
                'isAdmin'=>true,
                'email_verified_at'=>null
            ],
            [
                'name'=>'Slava',
                'email'=>'slavalion@mail.ru',
                'password'=>'$2y$10$lJ4.biQAyLvwGg81Ef.obOCf0IIPJ0C3L7fyNcb.EKhhhW74tia9a',
                'isAdmin'=>false,
                'email_verified_at'=>null
            ],
            [
                'name'=>'Vlada',
                'email'=>'vladalion@yandex.ru',
                'password'=>'$2y$10$lJ4.biQAyLvwGg81Ef.obOCf0IIPJ0C3L7fyNcb.EKhhhW74tia9a',
                'isAdmin'=>false,
                'email_verified_at'=>null
            ],

        ]);
    }  
    
}