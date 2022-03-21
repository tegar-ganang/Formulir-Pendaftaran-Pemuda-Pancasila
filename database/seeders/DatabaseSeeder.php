<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Article;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        // user::create([
        //   'name' => 'Tegar Ganang',
        //   'email' => 'tegarsatrio10@gmail.com',
        //   'password' => bcrypt('12345')
        // ]);

        // user::create([
        //     'name' => 'Satrio Priambodo',
        //     'email' => 'satriopriambodo10@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);
        User::factory(5)->create();

        Category::create([
            'name' => 'Seputar Pemuda Pancasila',
            'slug' => 'seputar-pemuda-pancasila'
        ]);

        Category::create([
            'name' => 'Prestasi Pemuda Pancasila',
            'slug' => 'prestasi-pemuda-pancasila'
        ]);

        Category::create([
            'name' => 'Pemuda Pancasila',
            'slug' => 'pemuda-pancasila'
        ]);

        Article::factory(20)->create();
        // Article::create([
        //     'title' => 'Judul Pertama',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'slug' => 'artikel-pertama',
        //     'body' => '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quidem recusandae saepe deleniti possimus sint pariatur fuga, itaque quam illum obcaecati vitae dolores deserunt aliquam rem maxime accusamus omnis placeat dolor. Dolor cumque ea fugit, illum id consequatur laboriosam totam deserunt impedit saepe magni sit maxime consectetur nulla sapiente consequuntur quam! Ut quis fugiat reprehenderit cupiditate nemo necessitatibus dignissimos magnam! Ad sunt accusantium veritatis cum harum vitae minus omnis rem in, vel nemo velit nostrum obcaecati ab fuga temporibus aperiam? Ad debitis quibusdam veritatis repellendus beatae, optio nam est deleniti, et obcaecati necessitatibus sunt suscipit, cumque ducimus nesciunt eaque repellat iusto!</p>',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur'
        // ]);
        // Article::create([
        //     'title' => 'Judul Kedua',
        //     'category_id' => 2,
        //     'user_id' => 2,
        //     'slug' => 'artikel-kedua',
        //     'body' => '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quidem recusandae saepe deleniti possimus sint pariatur fuga, itaque quam illum obcaecati vitae dolores deserunt aliquam rem maxime accusamus omnis placeat dolor. Dolor cumque ea fugit, illum id consequatur laboriosam totam deserunt impedit saepe magni sit maxime consectetur nulla sapiente consequuntur quam! Ut quis fugiat reprehenderit cupiditate nemo necessitatibus dignissimos magnam! Ad sunt accusantium veritatis cum harum vitae minus omnis rem in, vel nemo velit nostrum obcaecati ab fuga temporibus aperiam? Ad debitis quibusdam veritatis repellendus beatae, optio nam est deleniti, et obcaecati necessitatibus sunt suscipit, cumque ducimus nesciunt eaque repellat iusto!</p>',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur'
        // ]);
        // Article::create([
        //     'title' => 'Judul Ketiga',
        //     'category_id' => 3,
        //     'user_id' => 1,
        //     'slug' => 'artikel-ketiga',
        //     'body' => '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quidem recusandae saepe deleniti possimus sint pariatur fuga, itaque quam illum obcaecati vitae dolores deserunt aliquam rem maxime accusamus omnis placeat dolor. Dolor cumque ea fugit, illum id consequatur laboriosam totam deserunt impedit saepe magni sit maxime consectetur nulla sapiente consequuntur quam! Ut quis fugiat reprehenderit cupiditate nemo necessitatibus dignissimos magnam! Ad sunt accusantium veritatis cum harum vitae minus omnis rem in, vel nemo velit nostrum obcaecati ab fuga temporibus aperiam? Ad debitis quibusdam veritatis repellendus beatae, optio nam est deleniti, et obcaecati necessitatibus sunt suscipit, cumque ducimus nesciunt eaque repellat iusto!</p>',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur'
        // ]);
        // Article::create([
        //     'title' => 'Judul Keempat',
        //     'category_id' => 3,
        //     'user_id' => 2,
        //     'slug' => 'artikel-keempat',
        //     'body' => '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quidem recusandae saepe deleniti possimus sint pariatur fuga, itaque quam illum obcaecati vitae dolores deserunt aliquam rem maxime accusamus omnis placeat dolor. Dolor cumque ea fugit, illum id consequatur laboriosam totam deserunt impedit saepe magni sit maxime consectetur nulla sapiente consequuntur quam! Ut quis fugiat reprehenderit cupiditate nemo necessitatibus dignissimos magnam! Ad sunt accusantium veritatis cum harum vitae minus omnis rem in, vel nemo velit nostrum obcaecati ab fuga temporibus aperiam? Ad debitis quibusdam veritatis repellendus beatae, optio nam est deleniti, et obcaecati necessitatibus sunt suscipit, cumque ducimus nesciunt eaque repellat iusto!</p>',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur'
        // ]);
    }
}
