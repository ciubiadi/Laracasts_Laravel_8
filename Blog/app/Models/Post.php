<?php

namespace App\Models;

use Illuminate\Support\Facades\Storage;

class Post 
{    
    public static function all()
    {
        return cache()->rememberForever('posts.all', function () {
            return collect(Storage::files(resource_path("posts")))
            ->map(function ($file) {
                return YamlFrontMatter::parseFile($file);
            })
            ->map(function ($docment) {
                return new Post(
                    $document->title,
                    $document->excerpt,
                    $document->date,
                    $document->body(),
                    $document->slug
                );
            })
            ->sortByDesc('date');
        });
    }

    public static function find($slug)
    {
        // of all the blog posts, find the one with a slug that matches the one that was requested.
        return static::all()->firstWhere('slug', $slug);
    }   
}