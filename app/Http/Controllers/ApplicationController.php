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

        $message = 'Новая заявка от ' . $application->phone;
        mail('leskovstudio@gmail.com', null, $message);
        return redirect('/');
    }

    public function delete($id)
    {
        Application::destroy($id);
        return redirect()->back();
    }
}
