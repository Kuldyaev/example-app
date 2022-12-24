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
                'img'=>'img/business.svg',
                'slug'=>'business'
            ],
            [
                'name'=>'Общество',
                'img'=>'img/politics.svg',
                'slug'=>'sociality'
            ],
            [
                'name'=>'Спорт',
                'img'=>'img/sport.svg',
                'slug'=>'sport'
            ],
            [
                'name'=>'Культура',
                'img'=>'img/culture.svg',
                'slug'=>'culture'
            ],
            [
                'name'=>'Наука',
                'img'=>'img/science.svg',
                'slug'=>'science'
            ]
        ]);
    }
}
