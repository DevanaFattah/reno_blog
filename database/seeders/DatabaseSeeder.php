<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        User::create([
            'name' => 'Devana Fattah',
            'username' => 'devanafattah',
            'email' => 'dafrenov@gmail.com',
            'password' => bcrypt('rahasia')
        ]);

        // User::create([
        //     'name' => 'Amogus Hitam',
        //     'email' => 'amogus@gmail.com',
        //     'password' => bcrypt('amogus')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum pertama',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam qui molestias aut, at harum exercitationem facilis atque beatae tempore, consequuntur assumenda architecto quo, accusantium cupiditate! Incidunt, iure. Alias cumque sequi tempora sed molestiae id harum, dignissimos soluta vero, debitis placeat ad</p> <p>. Pariatur consequuntur vel nisi neque asperiores cupiditate sed magni eum quibusdam a atque consectetur eligendi temporibus, sint qui nesciunt sapiente ut perferendis accusamus? Expedita accusantium cum fugiat dolorem saepe consequatur ipsa natus maxime velit id, sunt illum delectus ipsum obcaecati assumenda non, impedit, autem iste. Quam quaerat repellendus minima</p> <p> , cumque fugit maxime eum tenetur optio itaque laboriosam. Corporis dolorum dolorem pariatur a minima commodi. Magnam rem quos est labore, doloremque laudantium corrupti sint temporibus animi quasi expedita culpa illo,</p> <p> quo consectetur aperiam assumenda vero eaque ducimus sit neque possimus cum consequatur dolor? Accusamus tempora reprehenderit, eum commodi voluptatum nihil inventore! Illum quis, praesentium temporibus deserunt adipisci maiores in optio?</p>'
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'category_id' => 2,
        //     'user_id' => 1,
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum kedua',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam qui molestias aut, at harum exercitationem facilis atque beatae tempore, consequuntur assumenda architecto quo, accusantium cupiditate! Incidunt, iure. Alias cumque sequi tempora sed molestiae id harum, dignissimos soluta vero, debitis placeat ad</p> <p>. Pariatur consequuntur vel nisi neque asperiores cupiditate sed magni eum quibusdam a atque consectetur eligendi temporibus, sint qui nesciunt sapiente ut perferendis accusamus? Expedita accusantium cum fugiat dolorem saepe consequatur ipsa natus maxime velit id, sunt illum delectus ipsum obcaecati assumenda non, impedit, autem iste. Quam quaerat repellendus minima</p> <p> , cumque fugit maxime eum tenetur optio itaque laboriosam. Corporis dolorum dolorem pariatur a minima commodi. Magnam rem quos est labore, doloremque laudantium corrupti sint temporibus animi quasi expedita culpa illo,</p> <p> quo consectetur aperiam assumenda vero eaque ducimus sit neque possimus cum consequatur dolor? Accusamus tempora reprehenderit, eum commodi voluptatum nihil inventore! Illum quis, praesentium temporibus deserunt adipisci maiores in optio?</p>'
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'category_id' => 1,
        //     'user_id' => 2,
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum ketiga',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam qui molestias aut, at harum exercitationem facilis atque beatae tempore, consequuntur assumenda architecto quo, accusantium cupiditate! Incidunt, iure. Alias cumque sequi tempora sed molestiae id harum, dignissimos soluta vero, debitis placeat ad</p> <p>. Pariatur consequuntur vel nisi neque asperiores cupiditate sed magni eum quibusdam a atque consectetur eligendi temporibus, sint qui nesciunt sapiente ut perferendis accusamus? Expedita accusantium cum fugiat dolorem saepe consequatur ipsa natus maxime velit id, sunt illum delectus ipsum obcaecati assumenda non, impedit, autem iste. Quam quaerat repellendus minima</p> <p> , cumque fugit maxime eum tenetur optio itaque laboriosam. Corporis dolorum dolorem pariatur a minima commodi. Magnam rem quos est labore, doloremque laudantium corrupti sint temporibus animi quasi expedita culpa illo,</p> <p> quo consectetur aperiam assumenda vero eaque ducimus sit neque possimus cum consequatur dolor? Accusamus tempora reprehenderit, eum commodi voluptatum nihil inventore! Illum quis, praesentium temporibus deserunt adipisci maiores in optio?</p>'
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'category_id' => 2,
        //     'user_id' => 2,
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum keempat',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam qui molestias aut, at harum exercitationem facilis atque beatae tempore, consequuntur assumenda architecto quo, accusantium cupiditate! Incidunt, iure. Alias cumque sequi tempora sed molestiae id harum, dignissimos soluta vero, debitis placeat ad</p> <p>. Pariatur consequuntur vel nisi neque asperiores cupiditate sed magni eum quibusdam a atque consectetur eligendi temporibus, sint qui nesciunt sapiente ut perferendis accusamus? Expedita accusantium cum fugiat dolorem saepe consequatur ipsa natus maxime velit id, sunt illum delectus ipsum obcaecati assumenda non, impedit, autem iste. Quam quaerat repellendus minima</p> <p> , cumque fugit maxime eum tenetur optio itaque laboriosam. Corporis dolorum dolorem pariatur a minima commodi. Magnam rem quos est labore, doloremque laudantium corrupti sint temporibus animi quasi expedita culpa illo,</p> <p> quo consectetur aperiam assumenda vero eaque ducimus sit neque possimus cum consequatur dolor? Accusamus tempora reprehenderit, eum commodi voluptatum nihil inventore! Illum quis, praesentium temporibus deserunt adipisci maiores in optio?</p>'
        // ]);
    }
}
