<?php

namespace App\Http\Controllers;

use App\Application;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{

    public function store(Request $request)
    {
        $this->validate(
            $request, [
            'phone' => 'required'],
            $messages = [
                'required' => 'Заполните все поля'
            ]);

        $application = new Application();
        $application->phone = $request->phone;
        $application->status = 'Обрабатывается';
        $application->save();

        return redirect('/');
    }

    public function update($id)
    {
        $application = Application::all()->where('id', $id)->first();
        $application->status = 'Принято';
        $application->save();

        return redirect()->back();
    }

    public function destroy($id)
    {
        Application::destroy($id);
        return redirect()->back();
    }
}
