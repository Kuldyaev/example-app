<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\News;

class NewsController extends Controller
{
    public function addOne(){
        return view('addOne');
    }

    public function showOne($id)
    {
        $news = News::getNewsById($id);
        if ( $news == null ){
            $categories = Categories::getAll();
            return view('categories')->with('categories',$categories);
        } else {
            return view('showOne')->with('news',$news);
        }
    }

    public function showAllNews():string
    {
        $news = News::getAllNews();
        return view('showAllNews')->with('news',$news);
    }

    public function categories(Categories $categories):string
    {
        return view('categories')->with('categories',$categories->getAll());
    }

    public function showOneCategory($category_id):string
    {
        $news = News::getNewsByCategory($category_id);
        if ( $news == null ){
            $categories = Categories::getAll();
            return view('categories')->with('categories',$categories);
        } else {
            return view('showOneCategory')->with('news',$news);
        }
    }
}