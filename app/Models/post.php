<?php

namespace App\Models;

class post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Risky",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Porro necessitatibus quam sint, excepturi fuga nostrum eos velit vero voluptatem mollitia fugit repellendus molestias quo accusamus quis, sed et! Consequatur quis fugit ipsam reprehenderit impedit velit saepe, dicta veniam quia libero pariatur qui deserunt earum a quibusdam maiores cupiditate, ullam odio aspernatur eos voluptatibus neque sint soluta nisi! Iste maiores quia distinctio aliquid impedit reprehenderit culpa similique ex, doloremque cupiditate magnam consectetur temporibus aperiam. Recusandae porro vel similique consequatur error beatae, iste sunt, libero officiis expedita asperiores. Sed excepturi magni cum, quis accusamus, ipsam ducimus iusto earum hic quos impedit voluptates?"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Risky",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Porro necessitatibus quam sint, excepturi fuga nostrum eos velit vero voluptatem mollitia fugit repellendus molestias quo accusamus quis, sed et! Consequatur quis fugit ipsam reprehenderit impedit velit saepe, dicta veniam quia libero pariatur qui deserunt earum a quibusdam maiores cupiditate, ullam odio aspernatur eos voluptatibus neque sint soluta nisi! Iste maiores quia distinctio aliquid impedit reprehenderit culpa similique ex, doloremque cupiditate magnam consectetur temporibus aperiam. Recusandae porro vel similique consequatur error beatae, iste sunt, libero officiis expedita asperiores. Sed excepturi magni cum, quis accusamus, ipsam ducimus iusto earum hic quos impedit voluptates?"
        ],
        [
            "title" => "Judul Post Ketiga",
            "slug" => "judul-post-ketiga",
            "author" => "Risky",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Porro necessitatibus quam sint, excepturi fuga nostrum eos velit vero voluptatem mollitia fugit repellendus molestias quo accusamus quis, sed et! Consequatur quis fugit ipsam reprehenderit impedit velit saepe, dicta veniam quia libero pariatur qui deserunt earum a quibusdam maiores cupiditate, ullam odio aspernatur eos voluptatibus neque sint soluta nisi! Iste maiores quia distinctio aliquid impedit reprehenderit culpa similique ex, doloremque cupiditate magnam consectetur temporibus aperiam. Recusandae porro vel similique consequatur error beatae, iste sunt, libero officiis expedita asperiores. Sed excepturi magni cum, quis accusamus, ipsam ducimus iusto earum hic quos impedit voluptates?"
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
};
