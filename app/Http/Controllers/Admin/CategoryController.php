<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;


class CategoryController extends Controller
{
    public function showAllCategoryForAdmin()
    {
        return view('admin.showAllCategories')->with('categories', Category::all());
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

        $category->fill($request->all())->save();

        return redirect()->route('admin.categories.showAllCategoryForAdmin')->with('success', 'Новость успешно изменена!');
    }

    public function destroy(Category $category) {
        $category->delete();
        return redirect()->route('admin.categories.showAllCategoryForAdmin')->with('success', 'Категория удалена успешно!');
    }
}
