<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\News;


class NewsController extends Controller
{
    public function index()
    {
        $news = News::query()->paginate(5);
        return view('admin.showAllNews')->with('news',$news);
    }

    public function show(News $news)
    {
        return view('news.showOne')->with('news',$news);
    }

    public function create(Request $request)
    {
        $news = new News();
     
        return view('admin.create', [
            'news' => $news,
            'categories' => Category::all()
        ]);
    }

    public function store(Request $request)
    {
        $news = new News();
        $news->fill($request->all());
        $news->save();
        return redirect()->route('admin.news.index')->with('success', 'Новость успешно добавлена!');

    }

    public function edit(News $news) {
        return view('admin.create', [
            'news' => $news,
            'categories' => Category::all()
        ]);
    }

    
    public function update(Request $request, News $news) {

        $news->fill($request->all());
        $news->isPrivate = isset($request->isPrivate);
        $news->save();
        return redirect()->route('admin.news.index')->with('success', 'Новость успешно изменена!');
    }


    public function destroy(News $news) {
        $news->delete();
        return redirect()->route('admin.news.index')->with('success', 'Новость удалена успешно!');
    }
}
