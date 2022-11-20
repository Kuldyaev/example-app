<?php

namespace App\Models;

use Illuminate\Support\Facades\Storage;

class Categories
{
    private array $categories = [];

    public function getAll():array
    {
        $contents = Storage::disk('local')->get('categories.json');
        return json_decode($contents, true);
    }
}