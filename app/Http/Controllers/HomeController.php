<?php

namespace App\Http\Controllers;

use Auth;
use App\Application;
use App\Post;
use App\Service;
use App\Portfolio;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function admin()
    {
        if(Auth::user()->id == 1){
            $portfolio = Portfolio::all();
            $service = Service::all();
            $posts = Post::all();
            $application = Application::all();
            
            for ($i=0; $i<count($posts);$i++){

                $posts[$i]->description = str_limit($posts[$i]->description, 30);
            
            }

            return view ('page.admin',          [
                    'services'    => $service,
                    'posts'       => $posts,
                    'portfolios'  => $portfolio,
                    'applications' => $application,
                ]);
        }

        return redirect()->back();
    }

    public function Logout(){
        Auth::logout();
        return redirect()->back();
    }
}