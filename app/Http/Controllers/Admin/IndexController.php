<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
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

   public function downloadNews()
   {
       return response()->json(News::all())
            ->header('Content-Disposition', 'attachment; filename = "news.txt"')
           ->setEncodingOptions(JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
    }

    public function downloadCategories()
   {
       return response()->json(Category::all())
            ->header('Content-Disposition', 'attachment; filename = "categories.txt"')
           ->setEncodingOptions(JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
    }

    public function downloadOneCategory(Request $request)
    {
        if ($request->isMethod('post'))
        {
            $currCategory = $request['newsCategory'];
            return response()->json(News::where('category_id',$currCategory)->get())
            ->header('Content-Disposition', 'attachment; filename = "newsOneCategory.txt"')
           ->setEncodingOptions(JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
        } 

        return  view('admin.download');
    }
  
    public function mydownload()
    {
        $categories = Category::all();

        return  view('admin.download')->with('categories', $categories);
    }

    public function test2()
    {
        return  response()->download('22.jpg');
    }

    public function users()
    {
        return view('admin.users');
    }
}
