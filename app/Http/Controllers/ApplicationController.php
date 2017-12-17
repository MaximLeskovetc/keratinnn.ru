<?php

namespace App\Http\Controllers;

use App\Application;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{

    public function store(Request $request)
    {
        $application = new Application();

        if (empty($request->work)) {
            $application->works = "Не указана";
        } else {
            $application->works = $request->work;
        }

        $application->phone = $request->phone;
        $application->name = $request->name;
        $application->status = 'Обрабатывается';

        $this->validate(
            $request, [
            'phone' => 'required',
        ],
            $messages = [
                'required' => 'Заполните все поля',
            ]);

        $application->save();

        return redirect('/');
    }

    public function update($id)
    {

        $application = Application::find($id);

        $application->status = 'Принято';
        $application->save();

        return redirect()->back();


    }

    public function destroy($id)
    {

        $application = Application::find($id);

        $application->delete();

        return redirect()->back();
    }
}
