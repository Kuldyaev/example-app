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
        for ($i = 0; $i < 21; $i++) {
            $data[] = [
                'title' => $faker->realText(rand(10, 30)),
                'shortDescription' => $faker->realText(rand(10, 100)),
                'textInfo' => $faker->realText(rand(1000, 3000)),
                'isPrivate' => false,
                'category_id' => $faker->numberBetween(1, 5)
            ];
        }
        return $data;
    }

}
