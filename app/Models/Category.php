<?php

namespace App\Models;

use App\Models\News;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;   
    
    protected $fillable = ['name', 'img', 'slug'];

    public function news() {
        return $this->hasMany(News::class, 'category_id')->get();
    }
}