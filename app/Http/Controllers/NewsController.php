<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\News;

class NewsController extends Controller
{
    public function addOne(){
        return view('addOne');
    }

    public function showOne($id, News $news)
    {
        if ( $news->getNewsById($id) == null ){
            return view('page404');
        } else {
            return view('showOne')->with('news',$news->getNewsById($id));
        }
    }

    public function showAllNews(News $news):string
    {
        return view('showAllNews')->with('news',$news->getAllNews());
    }

    public function categories(Categories $categories):string
    {
        return view('categories')->with('categories',$categories->getAll());
    }

    public function showOneCategory($category_id, Categories $categories, News $news):string
    {
        if ( $news->getNewsByCategory($category_id) == null ){
            return view('categories')->with('categories',$categories->getAll());
        } else {
            return view('showOneCategory')->with('news',$news->getNewsByCategory($category_id));
        }
    }
}