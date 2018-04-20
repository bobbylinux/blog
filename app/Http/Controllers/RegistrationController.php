<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistrationForm;

class RegistrationController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function create()
    {
        return view('registration.create');
    }

    public function store(RegistrationForm $form)
    {
        /*$this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed',
        ]);*/

        $form->persist();

        //session("message", "Here is a default message");

        session()->flash("message","Thanks so much for signing up!");

        return redirect()->home();
    }
}
