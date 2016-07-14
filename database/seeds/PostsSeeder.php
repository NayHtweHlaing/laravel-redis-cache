<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use App\Models\Post;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->delete();

        Post::create([
            'title' => 'Improve site loading speed using Redis as caching server',
            'slug' => 'improve-site-loading-speed-using-redis',
            'short_content' => 'Doing multiple database queries on each page load, or rendering page from many views can cause delays and bad user experience. This tutorial will teach you how to speed up Laravel site in 15 minutes.',
            'long_content' => 'This is long content of this post',
            'cover_image' => 'https://placehold.it/450x300',
            'meta_description' => 'Doing multiple database queries on each page, or rendering page from many views can cause delays and bad user experience. This tutorial will teach you how to speed up Laravel site in 15 minutes.',
            'meta_keywords' => 'redis,redis laravel,laravel,cache, caching, redis server, cache tags',
            'created_at' => '2016-01-14 18:59:00',
            'status'    => 'published',
        ]);

        Post::create([
            'title' => 'Reduce number of requests by grouping assets with Gulp',
            'slug' => 'reduce-requests-to-server-with-gulp',
            'short_content' => 'This is first in the row tutorial about site optimization techniques. In this one I talk about Laravel Elixir/Gulp and how I use it to reduce number of requests from browser to server.',
            'long_content' => 'This is long content of this post',
            'cover_image' => 'https://placehold.it/450x300',
            'meta_description' => 'Using Gulp can be cumbersome for backend developers, good that we have Laravel Elixir as fluent API around it.',
            'meta_keywords' => 'elixir,elixir laravel,laravel,gulp,grunt,version,minify,group,js,css,node,node.js',
            'created_at' => '2016-01-12 16:44:00',
            'status'    => 'published',
        ]);

        Post::create([
            'title' => 'Upload and edit image using Croppic jQuery plugin',
            'slug' => 'upload-and-edit-image-using-croppic-jquery-plugin',
            'short_content' => 'I often have to code image upload widgets for profile photos or some kind of image editing feature. Each website layout uses custom photo sizes and cropping those image on server side could cause image distortion.',
            'long_content' => 'This is long content of this post',
            'cover_image' => 'https://placehold.it/450x300',
            'meta_description' => 'It works in same way as Twitter or Facebook photo widgets. You select an image, after that you are presented with slide and zoom options and crop button.',
            'meta_keywords' => 'upload,image,upload image,edit image,edit,laravel,crop,jquery,upload and edit,dropzone,crop image,croppic',
            'created_at' => '2015-12-15 00:00:00',
            'status'    => 'published',
        ]);

    }
}
