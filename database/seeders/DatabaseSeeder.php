<?php

namespace Database\Seeders;

use App\Models\Post;
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
        
        // User::create([
        //     'name' => 'sidra',
        //     'email' => 'sidra@gmail.com',
        //     'password' => bcrypt('password')
        // ]);

        User::create([
            'name' => 'mamang',
            'username' => 'mamang',
            'email' => 'mamang@gmail.com',
            'password' => bcrypt('password')
        ]); 
        
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        User::factory(5)->create();
        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'judul pertama',
        //     'category_id' => 1,
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatibus suscipit reprehenderit inventore veritatis accusantium incidunt mollitia harum rerum dolor eius',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis praesentium et nesciunt beatae sed eius cum vitae officiis reiciendis fuga eveniet totam illo, itaque ad commodi voluptas sit ipsa, quo vero labore minus quam facere odio? Mollitia beatae non asperiores molestiae quasi officiis. Iusto excepturi rem harum commodi alias quaerat cupiditate sint aperiam dicta repudiandae, enim autem, minima dolor assumenda, aliquam nulla adipisci unde molestias maxime. Molestiae non, incidunt ratione odit veniam numquam aspernatur soluta beatae? Beatae odit facere quam velit ut quia in, dolor aliquid sed dicta quasi iure libero numquam eum ipsum magni quibusdam voluptatibus sit temporibus qui.',
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'judul kedua',
        //     'category_id' => 2,
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatibus suscipit reprehenderit inventore veritatis accusantium incidunt mollitia harum rerum dolor eius',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis praesentium et nesciunt beatae sed eius cum vitae officiis reiciendis fuga eveniet totam illo, itaque ad commodi voluptas sit ipsa, quo vero labore minus quam facere odio? Mollitia beatae non asperiores molestiae quasi officiis. Iusto excepturi rem harum commodi alias quaerat cupiditate sint aperiam dicta repudiandae, enim autem, minima dolor assumenda, aliquam nulla adipisci unde molestias maxime. Molestiae non, incidunt ratione odit veniam numquam aspernatur soluta beatae? Beatae odit facere quam velit ut quia in, dolor aliquid sed dicta quasi iure libero numquam eum ipsum magni quibusdam voluptatibus sit temporibus qui.',
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'judul ketiga',
        //     'category_id' => 1,
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatibus suscipit reprehenderit inventore veritatis accusantium incidunt mollitia harum rerum dolor eius',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis praesentium et nesciunt beatae sed eius cum vitae officiis reiciendis fuga eveniet totam illo, itaque ad commodi voluptas sit ipsa, quo vero labore minus quam facere odio? Mollitia beatae non asperiores molestiae quasi officiis. Iusto excepturi rem harum commodi alias quaerat cupiditate sint aperiam dicta repudiandae, enim autem, minima dolor assumenda, aliquam nulla adipisci unde molestias maxime. Molestiae non, incidunt ratione odit veniam numquam aspernatur soluta beatae? Beatae odit facere quam velit ut quia in, dolor aliquid sed dicta quasi iure libero numquam eum ipsum magni quibusdam voluptatibus sit temporibus qui.',
        //     'user_id' => 2
        // ]);

        //  Post::create([
        //     'title' => 'judul keempat',
        //     'category_id' => 2,
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatibus suscipit reprehenderit inventore veritatis accusantium incidunt mollitia harum rerum dolor eius',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis praesentium et nesciunt beatae sed eius cum vitae officiis reiciendis fuga eveniet totam illo, itaque ad commodi voluptas sit ipsa, quo vero labore minus quam facere odio? Mollitia beatae non asperiores molestiae quasi officiis. Iusto excepturi rem harum commodi alias quaerat cupiditate sint aperiam dicta repudiandae, enim autem, minima dolor assumenda, aliquam nulla adipisci unde molestias maxime. Molestiae non, incidunt ratione odit veniam numquam aspernatur soluta beatae? Beatae odit facere quam velit ut quia in, dolor aliquid sed dicta quasi iure libero numquam eum ipsum magni quibusdam voluptatibus sit temporibus qui.',
        //     'user_id' => 2
        // ]);

        
    }
}
