<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    public function run()
    {
        DB::table('categories')->insert([
            [
                'name'=>'Бизнес',
                'img'=>'storage/img/business.svg',
                'slug'=>'business'
            ],
            [
                'name'=>'Общество',
                'img'=>'storage/img/politics.svg',
                'slug'=>'sociality'
            ],
            [
                'name'=>'Спорт',
                'img'=>'storage/img/sport.svg',
                'slug'=>'sport'
            ],
            [
                'name'=>'Культура',
                'img'=>'storage/img/culture.svg',
                'slug'=>'culture'
            ],
            [
                'name'=>'Наука',
                'img'=>'storage/img/science.svg',
                'slug'=>'science'
            ]
        ]);
    }
}
