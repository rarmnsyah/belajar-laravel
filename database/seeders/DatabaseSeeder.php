<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;
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

        // User::create([
        //     'name' => 'anjay mbar',
        //     'email' => 'anjay@gmail.com',
        //     'password' => bcrypt('123')
        // ]);
        // User::create([
        //     'name' => 'anjay koncil',
        //     'email' => 'anja2y@gmail.com',
        //     'password' => bcrypt('123')
        // ]);
        // Post::create([
        //     'title' => 'Judul Post Pertama',
        //     'slug' => 'judul-post-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora doloribus dignissimos unde provident, quidem nobis illo minus earum inventore expedita molestias incidunt voluptas reprehenderit et facere? Dolor ab expedita rerum quod officia aliquid, magnam quam quidem non eius molestiae beatae exercitationem modi voluptate temporibus tenetur eaque sed quasi nulla, deleniti iusto maiores doloremque consequatur. Similique culpa magnam, dicta quidem pariatur quasi, tempora iure sint est quis consequuntur nobis magni, placeat deserunt! Quas sequi alias consequuntur ab neque eaque provident sunt atque ducimus corporis error iste quasi laudantium dolore similique, doloribus, ullam tenetur sint mollitia. Laboriosam doloremque ipsum aut quasi consequuntur, amet molestiae, a incidunt distinctio quisquam quos, exercitationem quam asperiores. Vero fugit placeat delectus maiores cupiditate iure, iusto saepe tempore?',
        //     'user_id' => 1,
        //     'category_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Post Kedua',
        //     'slug' => 'judul-post-Kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora doloribus dignissimos unde provident, quidem nobis illo minus earum inventore expedita molestias incidunt voluptas reprehenderit et facere? Dolor ab expedita rerum quod officia aliquid, magnam quam quidem non eius molestiae beatae exercitationem modi voluptate temporibus tenetur eaque sed quasi nulla, deleniti iusto maiores doloremque consequatur. Similique culpa magnam, dicta quidem pariatur quasi, tempora iure sint est quis consequuntur nobis magni, placeat deserunt! Quas sequi alias consequuntur ab neque eaque provident sunt atque ducimus corporis error iste quasi laudantium dolore similique, doloribus, ullam tenetur sint mollitia. Laboriosam doloremque ipsum aut quasi consequuntur, amet molestiae, a incidunt distinctio quisquam quos, exercitationem quam asperiores. Vero fugit placeat delectus maiores cupiditate iure, iusto saepe tempore?',
        //     'user_id' => 2,
        //     'category_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Post Ketiga',
        //     'slug' => 'judul-post-Ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora doloribus dignissimos unde provident, quidem nobis illo minus earum inventore expedita molestias incidunt voluptas reprehenderit et facere? Dolor ab expedita rerum quod officia aliquid, magnam quam quidem non eius molestiae beatae exercitationem modi voluptate temporibus tenetur eaque sed quasi nulla, deleniti iusto maiores doloremque consequatur. Similique culpa magnam, dicta quidem pariatur quasi, tempora iure sint est quis consequuntur nobis magni, placeat deserunt! Quas sequi alias consequuntur ab neque eaque provident sunt atque ducimus corporis error iste quasi laudantium dolore similique, doloribus, ullam tenetur sint mollitia. Laboriosam doloremque ipsum aut quasi consequuntur, amet molestiae, a incidunt distinctio quisquam quos, exercitationem quam asperiores. Vero fugit placeat delectus maiores cupiditate iure, iusto saepe tempore?',
        //     'user_id' => 1,
        //     'category_id' => 3
        // ]);
        User::factory(3)->create();

        Category::create([
            'name' => 'Web Development',
            'slug' => 'web-development'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Programming',
            'slug' => 'programming'
        ]);

        Post::factory(25)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
