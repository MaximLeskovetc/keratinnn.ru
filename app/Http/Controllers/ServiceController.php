<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;
use App\Service;


class ServiceController extends Controller
{

    public function index()
    {
        $service = Service::all();

        return view('service.index', ['services' => $service]);
    }

    public function create()
    {
        return view('service.create');
    }

    public function store(Request $request)
    {
        $alias = Service::rus2translit($request->title);
        $service = new Service();
        $service->title = $request->title;
        $service->description = $request->description;
        $service->alias = $alias;
        $this->validate(
            $request, [
            'title' => 'required|max:255',
            'description' => 'required|max:255',
            'photo' => 'image'],
            $messages = [
                'required' => 'Заполните все поля',
                'image' => 'Не совпадает формат изображения',
                'max' => 'Слишком длинное описание',
            ]);
        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $filename = substr(bcrypt(time()), 4, 14) . '_' . date("mdy") . '.' . $photo->getClientOriginalExtension();
            Image::make($photo)->resize(800, 600)->save(public_path('/images/upload/' . $filename));

            $service->image = $filename;
            $service->save;
        }
        $service->save();
        return redirect('/admin');
    }


    public function show($alias)
    {
        $service = Service::where('alias', $alias)->first();
        return view('service.view', ['service' => $service]);
    }

    public function edit($id)
    {
        $service = Service::find($id);
        return view('service.edit', ['service' => $service]);
    }

    public function update(Request $request, $id)
    {
        $service = Service::find($id);
        $service->title = $request->title;
        $service->description = $request->description;
        $this->validate(
            $request, [
            'title' => 'required|max:255',
            'description' => 'required',
            'photo' => 'image'],
            $messages = [
                'required' => 'Заполните все поля',
                'image' => 'Не совпадает формат изображения',
                'max' => 'Слишком длинное описание',
            ]);

        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $filename = substr(bcrypt(time()), 4, 14) . '_' . date("mdy") . '.' . $photo->getClientOriginalExtension();
            Image::make($photo)->resize(800, 600)->save(public_path('/images/upload/' . $filename));

            $service->image = $filename;
            $service->save;
        }
        $service->save();

        return view('service.view', ['service' => $service]);
    }


    public function destroy($id)
    {
        Service::destroy($id);

        return redirect()->back();
    }
}