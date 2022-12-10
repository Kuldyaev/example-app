<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\News;


class CategoryController extends Controller
{
    public function showAllCategoryForAdmin()
    {
        return view('admin.showAllCategories')->with('categories', Category::all());
    }

    public function show($slug) {

        //TODO извлеките новости категории через отношения
        $category = Category::query()->where('slug', $slug)->first();
        
        $news = Category::query()->find(1)->news();
        //dd($news);
        return view('news.showOneCategory')
            ->with('news', $news)
            ->with('category', $category->name);
    }

    ///блок CRUD для категорий

    public function create(Request $request)
    {
        $category = new Category();

        if ($request->isMethod('post')) {
            $category->fill($request->all());
            $category->save();
            return redirect()->route('admin.categories.showAllCategoryForAdmin')->with('success', 'Категория успешно добавлена!');
        }
        return view('admin.createCategory', [
            'category' => $category,
        ]);
    }

    public function edit(Category $category) {
        return view('admin.createCategory', ['category' => $category]);
    }

    public function update(Request $request, Category $category) {

        $category->fill($request->all());
        $category->save();

        return redirect()->route('admin.categories.showAllCategoryForAdmin')->with('success', 'Новость успешно изменена!');
    }

    public function destroy(Category $category) {
        $category->delete();
        return redirect()->route('admin.categories.showAllCategoryForAdmin')->with('success', 'Категория удалена успешно!');
    }
}
