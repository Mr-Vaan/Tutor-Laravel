<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

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
        //     'name' => 'Muhammad Ivan Chriana',
        //     'email' => 'ivandhebel@gmail.com',
        //     'password' => bcrypt('123456')
        // ]);

        // User::create([
        //     'name' => 'Heriyanto',
        //     'email' => 'heriyanto@gmail.com',
        //     'password' => bcrypt('123456')
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
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit Odio enim ullam eius provident nostrum dignissimos exercitationem voluptate recusanda ex tenetur impedit ',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio, enim ullam eius provident nostrum dignissimos exercitationem voluptate recusandae nesciunt atque, id sunt beatae assumenda expedita culpa dolor impedit illo veritatis vero. Incidunt quasi sapiente reprehenderit veniam fuga voluptatum voluptatem ullam. Nisi, iure dolorem? Perspiciatis, recusandae eligendi hic at obcaecati a voluptatibus deserunt praesentium ex molestiae earum iusto non quod expedita nam quam reiciendis suscipit, autem, pariatur ea ipsum. Ratione ipsa distinctio maxime. Consequuntur laudantium incidunt fugit labore nam illum ducimus corrupti molestias! Quam dolor earum laboriosam eum saepe fugiat delectus, nesciunt natus ex tenetur impedit sed. Quibusdam, voluptatum. Molestiae perspiciatis vitae ea consequatur dolores blanditiis aut. Tempore architecto saepe sit placeat aliquam. Nulla, repellendus cupiditate! Soluta cupiditate facere eum nesciunt',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum sit amet consectetur adipisicing elit Vel cupiditate sed obcaecati veritatis minima ducimus quam ut voluptas voluptates optio qui harum dolor corrupti quae architecto odit consequuntur omnis Maiores hic quisquam',
        //     'body' => 'Lorem ipsum dolor site amet consectetur adipisicing elit. Odio, enim ullam eius provident nostrum dignissimos exercitationem voluptate recusandae nesciunt atque, id sunt beatae assumenda expedita culpa dolor impedit illo veritatis vero. Incidunt quasi sapiente reprehenderit veniam fuga voluptatum voluptatem ullam. Nisi, iure dolorem? Perspiciatis, recusandae  fugit labore nam illum ducimus corrupti molestias! Quam dolor earum laboriosam eum saepe fugiat delectus, nesciunt natus ex tenetur impedit sed. Quibusdam, voluptatum. Molestiae perspiciatis vitae ea consequatur dolores blanditiis aut. Tempore architecto saepe sit placeat aliquam. Nulla, repellendus cupiditate! Soluta cupiditate facere eum nesciunt.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum sit amet consectetur adipisicing elit Vel cupiditate sed obcaecati veritatis minima ducimus quam ut voluptas voluptates perferendis a iure accusantium ea impedit modi doloremque Sed dicta obcaecati qui cumque libero est possimus mollitia ut modi Temporibus!',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio, enim ullam eius provident nostrum dignissimos exercitationem voluptate recusandae nesciunt atque, id sunt beatae assumenda expedita culpa dolor impedit illo veritatis vero. Incidunt quasi sapiente reprehenderit veniam fuga voluptatum voluptatem ullam. Nisi, iure dolorem? Perspiciatis, autem, pariatur ea ipsum. Ratione ipsa distinctio maxime. Consequuntur laudantium incidunt fugit labore nam illum ducimus corrupti molestias!  tenetur impedit sed. Quibusdam, voluptatum. Molestiae perspiciatis vitae ea consequatur dolores blanditiis aut. Tempore architecto saepe sit placeat aliquam. Nulla, repellendus cupiditate! Soluta cupiditate facere eum nesciunt.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum sit amet consectetur adipisicing elit Vel cupiditate sed obcaecati veritatis minima ducimus quam ut voluptas voluptates perferendis a iure accusantium ea impedit modi doloremque Sed dicta obcaecati qui cumque libero est possimus mollitia ut modi Temporibus!',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio, enim ullam eius provident nostrum dignissimos exercitationem voluptate recusandae nesciunt atque, id sunt beatae assumenda expedita culpa dolor impedit illo veritatis vero. Incidunt quasi sapiente reprehenderit veniam fuga voluptatum voluptatem ullam. Nisi, iure dolorem? Perspiciatis, autem, pariatur ea ipsum. Ratione ipsa distinctio maxime. Consequuntur laudantium incidunt fugit labore nam illum ducimus corrupti molestias!  tenetur impedit sed. Quibusdam, voluptatum. Molestiae perspiciatis vitae ea consequatur dolores blanditiis aut. Tempore architecto saepe sit placeat aliquam. Nulla, repellendus cupiditate! Soluta cupiditate facere eum nesciunt.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);





    }
}