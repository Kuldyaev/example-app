<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use App\Models\News;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

   public function downloadNews(News $news)
   {
       return response()->json($news->getAllNews())
            ->header('Content-Disposition', 'attachment; filename = "news.txt"')
           ->setEncodingOptions(JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
    }

    public function downloadCategories(Categories $category)
   {
       return response()->json($category->getAll())
            ->header('Content-Disposition', 'attachment; filename = "categories.txt"')
           ->setEncodingOptions(JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
    }

    public function downloadOneCategory(Request $request, News $news)
    {
        if ($request->isMethod('post'))
        {
            $currCategory = $request['newsCategory'];
            return response()->json($news->getNewsByCategory($currCategory ))
            ->header('Content-Disposition', 'attachment; filename = "newsOneCategory.txt"')
           ->setEncodingOptions(JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
        } 

        return  view('admin.download');
     }
  
    public function mydownload( Categories $category)
    {
        return  view('admin.download', ['categories' => $category->getAll()]);
    }

    public function test2()
    {
        return  response()->download('22.jpg');
    }

    public function create(Request $request, Categories $category)
    {
        if ($request->isMethod('post')){
            
            $request->flash();
            return redirect()->route('admin.create');
        }
        
        return  view('admin.create', ['categories' => $category->getAll()]);
    }
}
