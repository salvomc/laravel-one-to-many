<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

use App\Models\Category;

class Post extends Model
{
    protected $fillable = ['title', 'content', 'slug', 'image', 'category_id'];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public static function generateSlug($title)
    {
        return Str::slug($title, '-');
    }

    use HasFactory;
}