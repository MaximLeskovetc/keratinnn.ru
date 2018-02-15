<?php

namespace App\Http\Controllers;

use App\Application;
use App\Post;
use App\Service;
use App\Portfolio;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    public function index()
    {
        $service = Service::all();
        $posts = Post::all()->take(4);
        $portfolio = Portfolio::all()->take(8);

        for ($i = 0; $i < count($posts); $i++) {

            $posts[$i]->description = str_limit($posts[$i]->description, 200);

        }

        for ($i = 0; $i < count($service); $i++) {

            $service[$i]->description = strip_tags(str_limit($service[$i]->description, 200));

        }

        return view('index',
            [
                'service' => $service,
                'posts' => $posts,
                'portfolios' => $portfolio,
            ]
        );
    }

    public function admin()
    {

        $portfolio = Portfolio::all();
        $service = Service::all();
        $posts = Post::all();
        $application = Application::all();

        for ($i = 0; $i < count($posts); $i++) {
            $posts[$i]->description = str_limit($posts[$i]->description, 30);
        }

        return view('page.admin', [
            'services' => $service,
            'posts' => $posts,
            'portfolios' => $portfolio,
            'applications' => $application,
        ]);

    }

    public function price()
    {
        return view('page.price');
    }
    public function about()
    {
        return view('page.about');
    }
    public function contact()
    {
        return view('page.contact');
    }
}