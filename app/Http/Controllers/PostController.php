<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth;
use Image;
use App\Post;
use Illuminate\Support\Facades\File;


class PostController extends Controller
{

    public function index()
    {
        
        $post = Post::all();

        for ($i=0; $i<count($post);$i++){

            $post[$i]->description = str_limit($post[$i]->description, 200);
        }
        return view('post.index', ['posts' => $post] );
    }

    public function create()
    {
        return view('post.create');
    }

    public function store(Request $request)
    {
        $post = new Post();
        $alias = Post::rus2translit($request->title);
        $post->alias = $alias;
        $post->title = $request->title;
        $post->description = $request->description;

        $this->validate(
            $request, [
                'title' => 'required|max:255',
                'description' => 'required',
                'image' => 'image'],
            $messages = [
                'required'    => 'Заполните все поля',
                'image'       => 'Не совпадает формат изображения',
                'max'         => 'Слишком длинное название статьи',
                'min'         => 'Слишком короткое содержание статьи'
            ]);

        if ($request->hasFile('photo')){
            $photo = $request->file('photo');
            $filename = substr(bcrypt(time()),4,14).'_'.date("mdy").'.'.$photo->getClientOriginalExtension();
            Image::make($photo)->save(public_path('/images/upload/'. $filename));

            $post->image = $filename;
            $post->save;
        }

        $post->save();

        return redirect('/admin');
    }


    public function show($alias)
    {
        $post = Post::where('alias', $alias)->first();
        $comments = $post->comment;

        if(!is_null(Auth::user())){
            if(Auth::user()->name=='admin'){

                return view('post.admin.view', [
                'post' => $post,            
                'comments' => $comments]);
            }
        }

        return view('post.view', [
            'post' => $post,            
            'comments' => $comments]);
    }

    public function edit($id)
    {
        $post = Post::find($id);
        return view('post.edit', ['post' => $post]);
    }

    public function update(Request $request, $id)
    {

        $post = Post::find($id);

        $post->title = $request->title;
        $post->description = $request->description;

        $this->validate(
            $request, [
                'title' => 'required|max:255',
                'description' => 'required',
                'image' => 'image'],
            $messages = [
                'required'    => 'Заполните все поля',
                'image'       => 'Не совпадает формат изображения',
                'max'         => 'Слишком длинное название статьи',
                'min'         => 'Слишком короткое содержание статьи'
            ]);
  
        if ($request->hasFile('photo')){
            $photo = $request->file('photo');
            $filename = substr(bcrypt(time()),4,14).'_'.date("mdy").'.'.$photo->getClientOriginalExtension();
            Image::make($photo)->resize(800,600)->save(public_path('/images/upload/'. $filename));

            $post->image = $filename;
            $post->save;
        }

        $post->save();

        return redirect()->back();
    }


    public function destroy($id)
    {
        $post = Post::find($id);

        $post->delete();

        return redirect()->back();
    }
}
