<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

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
        $categories = Categories::all();

        return  view('admin.download')->with('categories', $categories);
    }

    public function test2()
    {
        return  response()->download('22.jpg');
    }

    public function create(Request $request, News $news, Categories $category)
    {
        if ($request->isMethod('post')){
            $oldNews = $news->getAllNews();
            $oldNews[] = [
                "title" => $request->title,
                "textInfo" => $request->textInfo,
                "shortDescription" => $request->shortDescription,
                "isPrivate" => isset($request->isPrivate),
                "category_id" => (int)$request->newsCategory
            ];
            $id = array_key_last($oldNews);
            $oldNews[$id]['id'] = $id;
            Storage::disk('local')->put('news.json', json_encode($oldNews, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
            $activePage = $id;
           
            return redirect()->route('news.showOne', [$id])->with('success', 'Новость успешно добавлена!');
        }
        
        $categories = Categories::all();
        //dd($categories);
        return  view('admin.create')->with('categories', $categories);
    }
}
