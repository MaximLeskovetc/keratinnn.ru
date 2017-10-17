<?php

namespace App\Http\Controllers;

use App\Application;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        if(!empty($_GET['id'])){
            $name = ' на '. $_GET['id'];
        }else{
            $name = "";
        }

        $work = $_GET['id'];
        $search = array("полировка","(прикорневой объём)");
        $replace = array("полировку","");

        $name = str_replace($search, $replace, mb_strtolower($name));

        return view('page.application',[
            'name' => $name,
            'work' => $work]);
    }

    public function store(Request $request)
    {
        $application = new Application();

        if(empty($request->work)){
            $application->works = "Не указана";
        }else{
            $application->works = $request->work;
        }

        $application->phone = $request->phone;
        $application->name = $request->name;
        $application->status = 'Обрабатывается';
        
        $this->validate(
            $request, [
                'phone' => 'required',
                'name'  => 'required'
                ],
            $messages = [
                'required'    => 'Заполните все поля',
                ]);

        $application->save();

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function show(Application $application)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function edit(Application $application)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Application  $application
     * @return \Illuminate\Http\Response
     */

    public function update($id)
    {

        $application = Application::find($id);

        $application->status = 'Принято';
        $application->save();
        
        return redirect()->back();


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $application = Application::find($id);

        $application->delete();

        return redirect()->back();
    }
}
