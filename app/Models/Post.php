<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post{
    public static function all(){
        return [
            [
                'id' => 1,
                'slug' => 'judul-artikel-1',
                'title' => 'Judul Artikel 1',
                'author' => 'Fawwaz Abdulloh Al-Jawi',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus unde explicabo non fugiat in ipsam iure dicta laboriosam officia aut, aliquid eligendi. Officiis consectetur perspiciatis dicta, quisquam voluptas deserunt et.'
            ],
            [
                'id' => 2,
                'slug' => 'judul-artikel-2',
                'title' => 'Judul Artikel 2',
                'author' => 'Fawwaz Abdulloh Al-Jawi',
                'body' => 'Possimus consequatur in fugit illum. Veritatis eveniet nihil magni asperiores nam soluta eaque unde iste, molestias quo ipsum quas maxime assumenda quibusdam?'
            ],
            [
                'id' => 3,
                'slug' => 'judul-artikel-3',
                'title' => 'Judul Artikel 3',
                'author' => 'Fawwaz Abdulloh Al-Jawi',
                'body' => 'Ut nostrum non nihil aliquid dolorem et fugiat, eaque, suscipit ad velit cumque magnam qui, dignissimos vero alias quae earum repellendus ipsum.'
            ]
        ];
    }

    public static function find($slug): array{


        $post = Arr::first(static::all(), fn ($post) => $post['slug'] == $slug);
    
        if(! $post){
            abort(404);
        }
        return $post;
    }
}

?>