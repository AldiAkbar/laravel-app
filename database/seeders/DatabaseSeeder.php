<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;


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
            'name' => 'Aldi Akbar Alimi',
            'username' => 'aldiakbar',
            'email' => 'aldiakbar373@gmail.com',
            'password' => bcrypt('dongo123')
        ]);

        User::factory(3)->create();
        
        Category::create([
            'name' => 'Programming',
            'slug' => 'programming'
        ]);
    
        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);
    
        Category::create([
            'name' => 'Copy Writing',
            'slug' => 'copy-writing'
        ]);

        Post::factory(20)->create();


        // User::create([
        //     'name' => 'Muhammad Alfin Rosyada',
        //     'email' => 'alfinliopes@gmail.com',
        //     'password' => bcrypt('alfinli12')
        // ]);


        // Post::create([
        //     'user_id' => 1,
        //     'category_id' => 1,
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempore cupiditate ex deleniti aut provident facilis esse facere commodi quam unde repellendus hic error totam,',
        //     'body' => '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempore cupiditate ex deleniti aut provident facilis esse facere commodi quam unde repellendus hic error totam, ducimus perferendis a sequi, laborum, voluptate vero dolorum aperiam quis ullam?</p> <p>Velit maxime culpa fugit quidem, provident dolorem labore odit commodi distinctio veniam odio reprehenderit aliquid alias quis aliquam temporibus. Explicabo, temporibus. Quasi quae unde ut beatae? Optio accusamus dolores doloremque repellendus aliquam soluta, nihil, id quod cumque, recusandae similique.</p> <p>Non impedit aliquid corporis! Dolore sed aliquam ipsam molestiae dolor in numquam ducimus facilis aspernatur quia cumque similique quisquam, maiores, qui reprehenderit omnis minus velit ut? aku jua ga au tuh katanya sih begitu tapi semoga aja bener ana andas askur alka.</p>'
        // ]);

        // Post::create([
        //     'user_id' => 2,
        //     'category_id' => 1,
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempore cupiditate ex deleniti aut provident facilis esse facere commodi quam unde repellendus hic error totam,',
        //     'body' => '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempore cupiditate ex deleniti aut provident facilis esse facere commodi quam unde repellendus hic error totam, ducimus perferendis a sequi, laborum, voluptate vero dolorum aperiam quis ullam?</p> <p>Velit maxime culpa fugit quidem, provident dolorem labore odit commodi distinctio veniam odio reprehenderit aliquid alias quis aliquam temporibus. Explicabo, temporibus. Quasi quae unde ut beatae? Optio accusamus dolores doloremque repellendus aliquam soluta, nihil, id quod cumque, recusandae similique.</p> <p>Non impedit aliquid corporis! Dolore sed aliquam ipsam molestiae dolor in numquam ducimus facilis aspernatur quia cumque similique quisquam, maiores, qui reprehenderit omnis minus velit ut? aku jua ga au tuh katanya sih begitu tapi semoga aja bener ana andas askur alka.</p>'
        // ]);

        // Post::create([
        //     'user_id' => 1,
        //     'category_id' => 2,
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempore cupiditate ex deleniti aut provident facilis esse facere commodi quam unde repellendus hic error totam,',
        //     'body' => '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempore cupiditate ex deleniti aut provident facilis esse facere commodi quam unde repellendus hic error totam, ducimus perferendis a sequi, laborum, voluptate vero dolorum aperiam quis ullam?</p> <p>Velit maxime culpa fugit quidem, provident dolorem labore odit commodi distinctio veniam odio reprehenderit aliquid alias quis aliquam temporibus. Explicabo, temporibus. Quasi quae unde ut beatae? Optio accusamus dolores doloremque repellendus aliquam soluta, nihil, id quod cumque, recusandae similique.</p> <p>Non impedit aliquid corporis! Dolore sed aliquam ipsam molestiae dolor in numquam ducimus facilis aspernatur quia cumque similique quisquam, maiores, qui reprehenderit omnis minus velit ut? aku jua ga au tuh katanya sih begitu tapi semoga aja bener ana andas askur alka.</p>'
        // ]);

        // Post::create([
        //     'user_id' => 2,
        //     'category_id' => 2,
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempore cupiditate ex deleniti aut provident facilis esse facere commodi quam unde repellendus hic error totam,',
        //     'body' => '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempore cupiditate ex deleniti aut provident facilis esse facere commodi quam unde repellendus hic error totam, ducimus perferendis a sequi, laborum, voluptate vero dolorum aperiam quis ullam?</p> <p>Velit maxime culpa fugit quidem, provident dolorem labore odit commodi distinctio veniam odio reprehenderit aliquid alias quis aliquam temporibus. Explicabo, temporibus. Quasi quae unde ut beatae? Optio accusamus dolores doloremque repellendus aliquam soluta, nihil, id quod cumque, recusandae similique.</p> <p>Non impedit aliquid corporis! Dolore sed aliquam ipsam molestiae dolor in numquam ducimus facilis aspernatur quia cumque similique quisquam, maiores, qui reprehenderit omnis minus velit ut? aku jua ga au tuh katanya sih begitu tapi semoga aja bener ana andas askur alka.</p>'
        // ]);

    }
}
