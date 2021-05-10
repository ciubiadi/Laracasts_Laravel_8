<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\User;

class Post extends Model
{
    use HasFactory;

    protected $guarded = [];

//    protected $with = ['category', 'author'];

//    protected $fillable = ['title', 'slug', 'body', 'excerpt', 'category_id'];

//    public function getRouteKeyName()
//    {
//        return 'slug';
//    }

    public function category()
    {
        // hasOne, hasMany, belongsTo, belongsToMany
        return $this->belongsTo(Category::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
