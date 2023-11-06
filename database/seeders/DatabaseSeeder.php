<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;

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
            
            
            // User::create([
                //     'name'=> 'Hail Hilal',
                //     'email'=> 'hail.hilal@gmail.com',
                //     'password'=> bcrypt('12345')
                // ]);
                
                // User::create([
                    //     'name'=> 'S.Hilal',
                    //     'email'=> 'shilal@gmail.com',
                    //     'password'=> bcrypt('12345')
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

        //     Post::create([
        //         'title' => 'Judul pertamax',
        //         'slug' => 'judul-pertamax',
        //         'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
        //         Fugit dolores repellat velit pariatur saepe non suscipit rerum, 
        //         deserunt, quod nulla a ipsa rem numquam, ex culpa ad iste iure labore.',
        //         'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
        //         Alias hic, eligendi iusto maxime quisquam consequatur temporibus beatae. 
        //         Fugit qui velit tempora expedita itaque! Voluptates, corrupti.',
        //         'category_id'=> 1,
        //         'user_id'=> 1
        //   ]);

        //     Post::create([
        //         'title' => 'Judul keduax',
        //         'slug' => 'judul-keduax',
        //         'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
        //         Fugit dolores repellat velit pariatur saepe non suscipit rerum, 
        //         deserunt, quod nulla a ipsa rem numquam, ex culpa ad iste iure labore.',
        //         'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
        //         Alias hic, eligendi iusto maxime quisquam consequatur temporibus beatae. 
        //         Fugit qui velit tempora expedita itaque! Voluptates, corrupti.',
        //         'category_id'=> 1,
        //         'user_id'=> 1
        //    ]);

        //     Post::create([
        //         'title' => 'Judul ketiax',
        //         'slug' => 'judul-ketiax',
        //         'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
        //         Fugit dolores repellat velit pariatur saepe non suscipit rerum, 
        //         deserunt, quod nulla a ipsa rem numquam, ex culpa ad iste iure labore.',
        //         'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
        //         Alias hic, eligendi iusto maxime quisquam consequatur temporibus beatae. 
        //         Fugit qui velit tempora expedita itaque! Voluptates, corrupti.',
        //         'category_id'=> 2,
        //         'user_id'=> 1
        //   ]);
        
        //   Post::create([
        //         'title' => 'Judul keempax',
        //         'slug' => 'judul-keempax',
        //         'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
        //         Fugit dolores repellat velit pariatur saepe non suscipit rerum, 
        //         deserunt, quod nulla a ipsa rem numquam, ex culpa ad iste iure labore.',
        //         'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
        //         Alias hic, eligendi iusto maxime quisquam consequatur temporibus beatae. 
        //         Fugit qui velit tempora expedita itaque! Voluptates, corrupti.',
        //         'category_id'=> 2,
        //         'user_id'=> 2
        //   ]);



    }
}