<?php

namespace App\Models;

class Categories
{
    private $categories = [
        1 => [
            'id' => 1,
            'name' => 'Бизнес'
        ],
        2 => [
            'id' => 2,
            'name' => 'Общество'
        ],
        3 => [
            'id' => 3,
            'name' => 'Спорт'
        ],
        4 =>[
            'id' => 4,
            'name' => 'Культура'
        ],
        5 => [
            'id' => 5,
            'name' => 'Наука'
        ]
    ];

    public function getAll():array
    {
        return $this->categories;
    }
}