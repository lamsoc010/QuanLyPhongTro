<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\Admin;
use Database\Seeders\MotelsTableSeeder;
use Database\Seeders\UsersTableSeeder;
use Database\Seeders\AdminTableSeeder;
use Database\Seeders\PostsTableSeeder;
use Database\Seeders\CommentMotelsTableSeeder;
use Database\Seeders\CommentPostsTableSeeder;
use Database\Seeders\ReplyCommentMotelsTS;
use Database\Seeders\ReplyCommentPostTS;
use Database\Seeders\CategoryTableSeeder;
use Database\Seeders\Image_motelsTS;
use Database\Seeders\Image_postsTS;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(AdminTableSeeder::class);
        $this->call(MotelsTableSeeder::class);
        $this->call(CategoryTableSeeder::class);
        $this->call(PostsTableSeeder::class);
        $this->call(CommentMotelsTableSeeder::class);
        $this->call(CommentPostsTableSeeder::class);
        $this->call(ReplyCommentMotelsTS::class);
        $this->call(ReplyCommentPostTS::class);
        $this->call(Image_motelsTS::class);
        $this->call(Image_postsTS::class);

    }
}
