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

    public function create(Request $request)
    {
        $news = new News();

        if ($request->isMethod('post')) {
            $news->fill($request->all());
            $news->save();
            return redirect()->route('admin.showAllNewsForAdmin')->with('success', 'Новость успешно добавлена!');
        }
        return view('admin.create', [
            'news' => $news,
            'categories' => Category::all()
        ]);
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
        return redirect()->route('admin.showAllNewsForAdmin')->with('success', 'Новость успешно изменена!');
    }


    public function destroy(News $news) {
        $news->delete();
        return redirect()->route('admin.showAllNewsForAdmin')->with('success', 'Новость удалена успешно!');
    }
}
