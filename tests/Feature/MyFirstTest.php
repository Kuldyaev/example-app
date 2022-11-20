<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class MyFirstTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_main_page()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSeeText('GeekBrains');;
    }

    public function test_allNews_page()
    {
        $response = $this->get('/news/showAll');

        $response->assertStatus(200);
        $response->assertSeeText('новости');
    }

    public function test_download_json_News_page()
    {
        $response = $this->get('/admin/download/json/news');

        $response->assertStatus(200);
        $response->assertJsonStructure(
            ['*' => [
                   'id',
   //                'category_id',
                   'isPrivate',
                   'title',
                   'shortDescription',
                   'textInfo',
                   'category_id'
               ]
             ]
        );
    }

    public function test_all_categories_page()
    {
        $response = $this->get('/news/categories');

        $response->assertStatus(200);
        $response->assertSeeText('Категории новостей');
        $response->assertSeeText('Бизнес');
        $response->assertSeeText('Спорт');
    }
}
