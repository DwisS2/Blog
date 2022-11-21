<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post
{
   private static $blog_posts = [
        [
        "title" => "judul 1",
        "slug" => "judul-1",
        "author" => "mahli",
        "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magni fugiat quae rem explicabo soluta, adipisci tenetur excepturi optio ipsum autem non facilis nihil repellendus molestiae vero omnis corrupti suscipit sequi."
        ],
        [
            "title" => "judul 2",
            "slug" => "judul-2",
            "author" => "imam",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magni fugiat quae rem explicabo soluta, adipisci tenetur excepturi optio ipsum autem non facilis nihil repellendus molestiae vero omnis corrupti suscipit sequi."
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
    //      $post = [];
    //     foreach($posts as $p) {
    //     if($p["slug"] === $slug) {
    //         $post = $p;
    //     };
    // }
    return $posts->firstWhere('slug', $slug);
    }
}
