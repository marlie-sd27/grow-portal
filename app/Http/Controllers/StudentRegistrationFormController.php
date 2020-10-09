<?php

namespace App\Http\Controllers;

use App\Models\StudentRegistrationForm;
use Illuminate\Http\Request;

class StudentRegistrationFormController extends Controller
{
    // display all registrations
    public function index()
    {
        //
    }

    // return registration form
    public function create()
    {
        return view('StudentRegistrationForms/create');
    }

    // store new registration
    public function store(Request $request)
    {
        //
    }

    // show specified regisration
    public function show(StudentRegistrationForm $registration)
    {
        //
    }

    // edit specified registration
    public function edit(StudentRegistrationForm $registration)
    {
        //
    }

    // update specified registration
    public function update(Request $request, StudentRegistrationForm $registration)
    {
        //
    }

    // delete specified registration
    public function destroy(StudentRegistrationForm $registration)
    {
        //
    }
}
