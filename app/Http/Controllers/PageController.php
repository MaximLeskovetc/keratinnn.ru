<?php

namespace App\Http\Controllers;

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

        //$portfolio = Portfolio::all();

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

    public function price()
    {
        return view('page.price');
    }

    public function contact()
    {
        return view('page.contact');
    }

    public function profile()
    {

        $name = Auth::user()->name;
        return view('page.profile', [
            'name' => $name
        ]);
    }
}