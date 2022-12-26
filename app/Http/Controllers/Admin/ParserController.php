<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Orchestra\Parser\Xml\Facade as XmlParser;
use App\Models\Category;
use App\Models\News;
use Illuminate\Support\Str;


class ParserController extends Controller
{
    public function index()
    {

        $links = [

            'https://overclockers.ru/rss/all.rss',
            'https://lenta.ru/rss',
           
        ];


        foreach ($links as $link) {
    
            $xml = XmlParser::load($link);
            $data = $xml->parse([
                'title' => ['uses' => 'channel.title'],
                'link' => ['uses' => 'channel.link'],
                'description' => ['uses' => 'channel.description'],
                'image' => ['uses' => 'channel.image.url'],
                'news' => ['uses' => 'channel.item[title,link,guid,description,pubDate,enclosure::url,category]'],
            ]);


            foreach ($data['news'] as $news) {
                if (!$news['category']) {
                    $categoryName = $data['title'];
                } else {
                    $categoryName = $news['category'];
                }
                $category = Category::query()->firstOrCreate([
                    'name' => $categoryName,
                    'slug' => Str::slug($categoryName)
                ]);
                News::query()->firstOrCreate([
                    'title' => $news['title'],
                    'shortDescription' => mb_strcut($news['description'], 0, 200, "UTF-8")."..."  ,
                    'isPrivate' => false,
                    'image' => (!$news['enclosure::url']) ? 'https://upload.wikimedia.org/wikipedia/commons/6/6c/No_image_3x4.svg' : $news['enclosure::url'] ,
                    'textInfo'=> $news['description'],
                    'category_id' => $category->id
                ]);
            }
        }
        
        return view('admin.showAllNews')->with('news', News::paginate(10));

    }
}
