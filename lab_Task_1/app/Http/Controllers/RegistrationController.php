<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function showForm()
    {
        return view('register');
    }

    public function formSubmission(Request $req)
    {
        $this->validate(
            $req,
            [
                'dob' => 'required|date',
                'zip' => 'required|digits:4',
                'uid' => 'required|size:10',
                'img' => 'required|image|mimes:jpeg,png',
                'ssn' => 'required|digits:9',
            ],
            [
                'required' => 'Please fill up the form properly',
                'date' => 'Please enter a valid date',
                'zip.digits' => 'Zip code must be 4 characters long and number',
                'uid.size' => 'ID must have 10 characters',
                'image' => 'Please select a valid file',
                'ssn.digits' => 'Please enter a valid social security number. SSN must have 9 numeric digits.'
            ]
        );


        return view('register')->with('output', true);
    }
}
