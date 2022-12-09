<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\News;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use App\Exports\ExportBasic;
use Maatwebsite\Excel\Facades\Excel;

class NewsController extends Controller
{
    public function showOne(News $news)
    {
        //$news = DB::table('news')->find($id);
       // $news = News::query()->find($id);
       
        return view('news.showOne')->with('news',$news);
    }

    public function showAllNews()
    {
       // $news = DB::table('news')->get();
       $news = News::where('isPrivate', false)->get();
        return view('news.showAllNews')->with('news',$news);
    }

    public function categories()
    {
        //$categories = DB::table('categories')->get();
        $categories = Category::all();
        //dump($categories);
        return view('news.categories')->with('categories',$categories);
    }

    public function showOneCategory($category_id)
    {
        // $news = DB::table('news')->where('category_id', $category_id)->get();
        $news = News::where('category_id',$category_id)->get();
        // dump($news);
        return view('news.showOneCategory')->with('news',$news);
    }

    //public function save(Categories $categories){
    //    Storage::disk('local')->put('categories.json', json_encode($categories->getAll(), JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
   // }

   public function exportBasic() 
   {
    return Excel::download(new ExportBasic, 'news-all.xlsx');
   }
}