<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Muhammad Fikri Ramadhan',
            'username' => 'fikri',
            'email' => 'fikrinamasaya123@gmail.com',
            'password' => bcrypt('Fikrigta123')
        ]);

        // User::create([
        //     'name' => 'Doddy Rahmadi',
        //     'email' => 'doddyrahmadi@gmail.com',
        //     'password' => bcrypt('doddyganteng')
        // ]);

        User::factory(3)->create();
        

        Category::create([
            'name' => 'Web Programing',
            'slug' => 'web-programing'
        ]);

         Category::create([
            'name' => 'Data Analyst',
            'slug' => 'data-analyst'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();
        // Post::create([
        //     'tittle' => 'Roro Jonggrang',
        //     'slug' => 'roro-jonggrang',
        //     // 'author' => 'Jajang Meyon',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, nulla quam harum voluptate rerum nisi laborum temporibus nemo quis accusamus est, a laboriosam labore',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, nulla quam harum voluptate rerum nisi laborum temporibus nemo quis accusamus est, a laboriosam labore, aspernatur delectus ab facere! Alias quo soluta autem deleniti reprehenderit sapiente aperiam quos distinctio inventore deserunt provident quia voluptates temporibus quod at nihil molestias ut facere dolorum, eveniet id laboriosam dolores velit? Facilis voluptas nam suscipit pariatur ipsam doloremque obcaecati laborum numquam, perspiciatis nobis ducimus accusantium odit assumenda! Facilis nesciunt voluptatum dolorum natus velit modi a veritatis animi, saepe quae suscipit cumque quaerat recusandae sequi sit accusantium eaque. Necessitatibus nesciunt itaque exercitationem facilis, ullam similique porro nisi modi aperiam nihil iste obcaecati nobis ratione! Eveniet facilis laboriosam ut perferendis modi consectetur est error cumque velit. Ipsam?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'tittle' => 'Kisah Ahmad Dani',
        //     'slug' => 'kisah-ahmad-dani',
        //     // 'author' => 'Cecep Sudrajat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, nulla quam harum voluptate rerum nisi laborum temporibus nemo quis accusamus est, a laboriosam labore',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, nulla quam harum voluptate rerum nisi laborum temporibus nemo quis accusamus est, a laboriosam labore, aspernatur delectus ab facere! Alias quo soluta autem deleniti reprehenderit sapiente aperiam quos distinctio inventore deserunt provident quia voluptates temporibus quod at nihil molestias ut facere dolorum, eveniet id laboriosam dolores velit? Facilis voluptas nam suscipit pariatur ipsam doloremque obcaecati laborum numquam, perspiciatis nobis ducimus accusantium odit assumenda! Facilis nesciunt voluptatum dolorum natus velit modi a veritatis animi, saepe quae suscipit cumque quaerat recusandae sequi sit accusantium eaque. Necessitatibus nesciunt itaque exercitationem facilis, ullam similique porro nisi modi aperiam nihil iste obcaecati nobis ratione! Eveniet facilis laboriosam ut perferendis modi consectetur est error cumque velit. Ipsam?',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'tittle' => 'Jalan Raya Pantai',
        //     'slug' => 'jalan-raya-pantai',
        //     // 'author' => 'Cecep Sudrajat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, nulla quam harum voluptate rerum nisi laborum temporibus nemo quis accusamus est, a laboriosam labore',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, nulla quam harum voluptate rerum nisi laborum temporibus nemo quis accusamus est, a laboriosam labore, aspernatur delectus ab facere! Alias quo soluta autem deleniti reprehenderit sapiente aperiam quos distinctio inventore deserunt provident quia voluptates temporibus quod at nihil molestias ut facere dolorum, eveniet id laboriosam dolores velit? Facilis voluptas nam suscipit pariatur ipsam doloremque obcaecati laborum numquam, perspiciatis nobis ducimus accusantium odit assumenda! Facilis nesciunt voluptatum dolorum natus velit modi a veritatis animi, saepe quae suscipit cumque quaerat recusandae sequi sit accusantium eaque. Necessitatibus nesciunt itaque exercitationem facilis, ullam similique porro nisi modi aperiam nihil iste obcaecati nobis ratione! Eveniet facilis laboriosam ut perferendis modi consectetur est error cumque velit. Ipsam?',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);

        // Post::create([
        //     'tittle' => 'Pantai Parang Tritis',
        //     'slug' => 'pantai-parang-tritis',
        //     // 'author' => 'Cecep Sudrajat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, nulla quam harum voluptate rerum nisi laborum temporibus nemo quis accusamus est, a laboriosam labore',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, nulla quam harum voluptate rerum nisi laborum temporibus nemo quis accusamus est, a laboriosam labore, aspernatur delectus ab facere! Alias quo soluta autem deleniti reprehenderit sapiente aperiam quos distinctio inventore deserunt provident quia voluptates temporibus quod at nihil molestias ut facere dolorum, eveniet id laboriosam dolores velit? Facilis voluptas nam suscipit pariatur ipsam doloremque obcaecati laborum numquam, perspiciatis nobis ducimus accusantium odit assumenda! Facilis nesciunt voluptatum dolorum natus velit modi a veritatis animi, saepe quae suscipit cumque quaerat recusandae sequi sit accusantium eaque. Necessitatibus nesciunt itaque exercitationem facilis, ullam similique porro nisi modi aperiam nihil iste obcaecati nobis ratione! Eveniet facilis laboriosam ut perferendis modi consectetur est error cumque velit. Ipsam?',
        //     'category_id' => 1,
        //     'user_id' => 2
        // ]);

    }
}
