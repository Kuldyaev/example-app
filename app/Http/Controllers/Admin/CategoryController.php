<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\News;


class CategoryController extends Controller
{
    public function index()
    {
        return view('admin.showAllCategories')->with('categories', Category::all());
    }

    public function show($slug) {
        $category = Category::query()->where('slug', $slug)->first();
        //dd($category);
        $news = Category::query()->find(1)->news();
        //dd($news);
        return view('news.showOneCategory')
            ->with('news', $news);
   
    }

    ///блок CRUD для категорий

    public function create(Request $request)
    {
        $category = new Category();
        return view('admin.createCategory', ['category' => $category]);
    }

    public function store(Request $request)
    {
        $category = new Category();
        $category->fill($request->all());
        $category->save();
        return redirect()->route('admin.categories.index')->with('success', 'Категория успешно добавлена!');

    }

    public function edit(Category $category) {
        return view('admin.createCategory', ['category' => $category]);
    }

    public function update(Request $request, Category $category) {
        $category->fill($request->all());
        $category->save();

        return redirect()->route('admin.categories.index')->with('success', 'Категория успешно изменена!');
    }

    public function destroy(Category $category) {
        $category->delete();
        return redirect()->route('admin.categories.index')->with('success', 'Категория удалена успешно!');
    }
}
