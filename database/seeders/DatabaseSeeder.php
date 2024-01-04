<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Video;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Admin',
            'username' => 'Admin123',
            'google_id' => '',
            'facebook_id' => '',
            'email' => 'admin.oball@gmail.com',
            'password' => bcrypt('12345'),
            'image' => '',
            'about' => '',
            'Type' => 'admin' 
        ]);

        Video::create([
            'judul' => 'harry potter',
            'penulis' => 'harry potter',
            'penerbit' => 'harry potter',
            'tahun_terbit' => '2020-03-11',
            'genre' => 'Novel',
            'image' => 'pic1.jpg',
            'deskripsi' => ' Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minus adipisci dolore cum doloribus, debitis eos laudantium similique fugit aliquam inventore, necessitatibus harum praesentium porro itaque.',
            'category_id' => 1

        ]);

        Video::create([
            'judul' => 'harry potter',
            'penulis' => 'harry potter',
            'penerbit' => 'harry potter',
            'tahun_terbit' => '2020-03-11',
            'genre' => 'Novel',
            'image' => 'video-images/Komik Musume no Tomodachi.png',
            'deskripsi' => ' Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minus adipisci dolore cum doloribus, debitis eos laudantium similique fugit aliquam inventore, necessitatibus harum praesentium porro itaque.',
            'file' => 'pdfs/Komik Musume no Tomodachi.pdf',
            'category_id' => 4

        ]);

        Category::create([
            'name' => 'Novel',
            'image' => 'img/novel.png',
        ]);
        Category::create([
            'name' => 'Magazine',
            'image' => 'img/magazine.png',
        ]);
        Category::create([
            'name' => 'Dictionary',
            'image' => 'img/dictionary.png',
        ]);
        Category::create([
            'name' => 'Comic',
            'image' => 'img/comic.png',
        ]);
        Category::create([
            'name' => 'Tale',
            'image' => 'img/tale.png',
        ]);
        Category::create([
            'name' => 'Guide',
            'image' => 'img/guide.png',
        ]);

        User::factory(3)->create();
        Video::factory(15)->create();
    }
}
