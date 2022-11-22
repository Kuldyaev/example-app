<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\News;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use App\Exports\ExportBasic;
use Maatwebsite\Excel\Facades\Excel;

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

    public function categories()
    {
        $categories = DB::table('categories')->get();
        
        return view('news.categories')->with('categories',$categories);
    }

    public function showOneCategory($category_id, News $news):string
    {
        return view('news.showOneCategory')->with('news',$news->getNewsByCategory($category_id));
    }

    //public function save(Categories $categories){
    //    Storage::disk('local')->put('categories.json', json_encode($categories->getAll(), JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
   // }

   public function exportBasic() 
   {
    return Excel::download(new ExportBasic, 'news-all.xlsx');
   }
}