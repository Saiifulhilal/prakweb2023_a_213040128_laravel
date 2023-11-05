<?php

namespace App\Models;

class post
{
   private static  $blog_posts = [  
    [
        "title" => "One Piece",
        "slug" => "judul-post-pertama",
        "author" => "EIICHIRO ODA

        ",
        "body" => "Tepat sebelum ajalnya, Sang Raja Bajak Laut Legendaris, Gold Roger, mengumumkan bahwa dia telah menyembunyikan harta karunnya di sebuah tempat di dunia ini... 
        Kata-katanya tersebut telah membawa dunia menuju zaman kejayaan bajak laut! Dan kini, seorang pemuda bernama Luffy, telah memulai perjalanannya untuk menemukan harta karun tersebut,
         dan menjadi sang raja bajak laut!"
    ],
    [
        "title" => "Judul Post 2",
        "slug" => "judul-post-kedua",
        "author" => "mael",
        "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Neque quisquam illo totam error unde eveniet cupiditate minus suscipit. Cupiditate nulla esse fugit alias illo. Quas suscipit, cumque nulla et ipsum blanditiis voluptatem odit! Voluptas nisi harum, voluptatem asperiores blanditiis dolorum, incidunt soluta est neque esse totam! Natus dolore reiciendis quibusdam, aliquid debitis, velit molestiae ad, autem dicta laborum mollitia? Iste."
    ],
    ];

        public static function all(){
            return collect(self::$blog_posts);
        }

        public static function find($slug) 
        {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
        }
}
