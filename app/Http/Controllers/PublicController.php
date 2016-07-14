<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Cache;
use App\Logic\Render\PageRender;
use App\Models\Post;

class PublicController extends Controller
{
    protected $render;

    public function __construct(PageRender $pageRender)
    {
        $this->render = $pageRender;
    }

    public function getIndex()
    {
        //Check cache first
        $page = Cache::tags('home')->get('tuts-home-page');
        if ($page != null) {
            return $page;
        }

        return $this->render->getHome();
    }

    public function getPost($slug)
    {
        //Take only first slug
        $slugs = explode('/',$slug);
        $slug = $slugs[0];

        //Check cache first
        $page = Cache::tags('post')->get($slug);
        if ($page != null) {
            return $page;
        }

        $post = Post::where('slug', '=', $slug)->first();

        if( empty($post)) {
            abort(404);
        }

        return $this->render->getPost($post);
    }
}
