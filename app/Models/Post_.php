<?php

namespace App\Models;

class Post{
    private static $blog_posts = [
    [
    'judul'=> 'Judul Post Pertama',
    'slug' => 'judul-post-pertama',
    'author' => 'Devana Fattah',
    'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque, voluptatibus! Reiciendis dignissimos accusamus incidunt! Laudantium reiciendis repellendus aliquid ex nam soluta nisi praesentium provident veritatis veniam eaque quam sapiente ad id tempore ullam totam excepturi delectus quis aut, facere quos doloremque tenetur! Excepturi, quisquam hic reprehenderit aliquid, ratione deleniti temporibus quis repudiandae voluptatum adipisci quae quasi dolor ab tenetur explicabo accusamus cumque culpa, cum fugit magnam perspiciatis! Laborum est consectetur at! Dolorem voluptate deserunt modi iusto sunt vitae a tenetur?'],
    [
    'judul'=> 'Judul Post Kedua',
    'slug' => 'judul-post-kedua',
    'author' => 'Mang Oban',
    'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio quas earum, alias corrupti aliquid provident reprehenderit quisquam, debitis obcaecati blanditiis consequuntur minima eum saepe, mollitia nisi. Facilis id voluptatibus nisi velit aut deserunt eveniet itaque quis in, veritatis fugit architecto, rerum nulla, nemo veniam dicta exercitationem nobis dolor? Obcaecati consequatur totam laudantium minus explicabo, autem magni deserunt rerum ullam harum ab quibusdam facere. Cum nihil, dolorem ut officiis aut expedita labore illum eaque facere earum dicta quod perferendis accusantium harum minus animi doloremque temporibus esse cupiditate suscipit ad rerum eius? Quod perspiciatis officiis sit ab perferendis magnam mollitia ad ut?'
    ]
    ];

    public static function all() {
        return collect(self::$blog_posts);
    }

    public static function find($slug) {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }

}


