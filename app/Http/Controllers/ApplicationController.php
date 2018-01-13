<?php

namespace App\Http\Controllers;

use App\Application;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{

    public function store(Request $request)
    {
        $application = new Application();
        $application->phone = $request->phone;
        $application->status = 'Обрабатывается';

        $this->validate(
            $request, [
            'phone' => 'required'],
            $messages = [
                'required' => 'Заполните все поля'
            ]);

        $application->save();

        return redirect('/');
    }

    public function update($id)
    {
        $application = Application::where('id', $id);
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
