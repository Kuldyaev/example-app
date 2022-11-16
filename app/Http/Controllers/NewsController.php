<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\News;

class NewsController extends Controller
{
    public function addOne(){
        return view('news.addOne');
    }

    public function showOne($id, News $news)
    {
        return view('news.showOne')->with('news',$news->getNewsById($id));
    }

    public function showAllNews(News $news):string
    {
        return view('news.showAllNews')->with('news',$news->getAllNews());
    }

    public function categories(Categories $categories):string
    {
        return view('news.categories')->with('categories',$categories->getAll());
    }

    public function showOneCategory($category_id, Categories $categories, News $news):string
    {
        return view('news.showOneCategory')->with('news',$news->getNewsByCategory($category_id));
    }
}