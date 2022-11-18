<?php

namespace App\Models;

use Illuminate\Support\Facades\Storage;

class News
{
    private array $news = [];

    public function getAllNews():array
    {
        $contents = Storage::disk('local')->get('news.json');
        return json_decode($contents, true);
    }

    public function getNewsById($id): ?array
    {
        if (array_key_exists($id, $this->getAllNews())){
            return $this->getAllNews()[$id];
        } 
        return null;
    }

    public function getNewsByCategory($category_id): ?array
    {
        $newsByCatecory = [];
        foreach ($this->getAllNews() as $news){
            if ($news['category_id'] == $category_id){
                $newsByCatecory[]= $news;
            }
        }
        if (count($newsByCatecory) > 0){
            return $newsByCatecory;
        }   
        return null;
    }
}
