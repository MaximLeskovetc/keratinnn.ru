<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;
use App\Portfolio;

class PortfolioController extends Controller
{

    public function index()
    {
        $portfolio = Portfolio::all();

        return view('portfolio.index', ['portfolios' => $portfolio]);
    }

    public function create()
    {
        return view('portfolio.create');
    }

    public function store(Request $request)
    {
        $this->validate(
            $request, [
            'photo' => 'image'],
            $messages = [
                'required' => 'Заполните все поля',
                'image' => 'Не совпадает формат изображения',
                'max' => 'Слишком длинное описание',
            ]);

        $portfolio = new Portfolio();
        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $filename = str_replace('/', '_', substr(bcrypt(time()), 4, 14) . '_' . date("mdy") . '.' . $photo->getClientOriginalExtension());
            Image::make($photo)->resize(720, 720)->save(public_path('/images/upload/' . $filename));

            $portfolio->image = $filename;
            $portfolio->save;
        }
        $portfolio->save();

        return redirect('/admin');
    }


    public function show($id)
    {
        $portfolio = Portfolio::all()->where('id', $id)->first();

        return view('portfolio.view', ['portfolio' => $portfolio]);
    }

    public function edit($id)
    {
        $portfolio = Portfolio::all()->where('id', $id)->first();
        return view('portfolio.edit', ['portfolio' => $portfolio]);
    }

    public function update(Request $request, $id)
    {
        $this->validate(
            $request, [
            'photo' => 'image'],
            $messages = [
                'required' => 'Заполните все поля',
                'image' => 'Не совпадает формат изображения',
                'max' => 'Слишком длинное описание',
            ]);

        $portfolio = Portfolio::all()->where('id', $id)->first();
        $portfolio->title = $request->title;

        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $filename = substr(bcrypt(time()), 4, 14) . '_' . date("mdy") . '.' . $photo->getClientOriginalExtension();
            Image::make($photo)->resize(720, 720)->save(public_path('/images/upload/' . $filename));

            $portfolio->image = $filename;
            $portfolio->save;
        }
        $portfolio->save();

        return view('portfolio.view', ['portfolio' => $portfolio]);
    }


    public function destroy($id)
    {
        Portfolio::destroy($id);

        return redirect()->back();
    }
}