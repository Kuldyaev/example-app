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

        $news = Category::query()->find(1)->news();

        return view('news.showOneCategory')
            ->with('news', $news);
   
    }

    public function create(Request $request)
    {
        $category = new Category();
        return view('admin.createCategory', ['category' => $category]);
    }

    public function store(Request $request)
    {
        $category = new Category();

        $this->validate($request,[
            'name'=>'required|min:3|max:20', 
            'slug'=>'required|min:3|max:15', 
            'img'=>'required|min:3', 
        ],[],[
                'name'=>'Название категории', 
                'slug'=>'Slug', 
                'img'=>'Cсылка на изображение', 
        ]);

        $category->fill($request->all())->save() ;

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
