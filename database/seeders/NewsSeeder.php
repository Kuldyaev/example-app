<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker;
use Illuminate\Support\Facades\DB;


class NewsSeeder extends Seeder
{
    public function run()
    {
        DB::table('news')->insert($this->getData());
    }

    private function getData() {
        $data = [];
        $faker = Faker\Factory::create('ru_RU');
        for ($i = 0; $i < 2; $i++) {
            $data[] = [
                'title' => $faker->realText(rand(10, 30)),
                'shortDescription' => $faker->realText(rand(10, 200)),
                'textInfo' => $faker->realText(rand(1000, 3000)),
                'isPrivate' => false,
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/6/6c/No_image_3x4.svg',
                'category_id' => $faker->numberBetween(1, 5)
            ];
        }
        return $data;
    }

}
