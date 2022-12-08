<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\News;


class NewsController extends Controller
{
    public function showAllNewsForAdmin()
    {
        $news = News::query()->paginate(5);
        return view('admin.showAllNews')->with('news',$news);
    }

    ///блок CRUD для новостей

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
        
        $categories = Category::all();
        //dd($categories);
        return  view('admin.create')->with('categories', $categories);
    }
}
