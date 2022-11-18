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

    public function test1(News $news)
    {
        return response()->json($news->getAllNews())
            ->header('Content-Disposition', 'attachment; filename = "news.txt"')
            ->setEncodingOptions(JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
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
