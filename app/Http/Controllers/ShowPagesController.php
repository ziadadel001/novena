<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\department;
use App\Models\doctor;
use App\Models\blog;

class ShowPagesController extends Controller
{
    function ShowHome()
    {
        return view('index');
    }

    function ShowAbout()
    {
        return view('about');
    }

    function ShowService()
    {
        return view('service');
    }

    function ShowAppoinment()
    {
        return view('appoinment');
    }
    function ShowAppoinmentWithDoctor($name)
    {
        
        return view('appoinment', ['doctor' => $name]);
    }
    function ShowContact()
    {
        return view('contact');
    }

    function ShowConfirmation()
    {
        return view('confirmation');
    }

    function ShowDoctors()
    {
        $Doctors = doctor::all();
        return view('doctor', ['doctors' => $Doctors]);
    }
    function ShowDoctor(doctor $id)
    {
        return view('doctor-single', ['doctor' => $id]);
    }
    function ShowBlogs()
    {
        $blogs = blog::all();
        return view('blogs', ['blogs' => $blogs]);
    }
    function ShowBlog(blog $id)
    {

        return view('blog-single', ['blog' => $id]);
    }
    function ShowConfirmationAPP()
    {
        return view('confirmationAPP');
    }

    function ShowDepartments()
    {
        $departments = department::all();
        return view('department', ['departments' => $departments]);
    }

    function ShowSingleDepartment($department)
    {
        $S_Department = department::find($department);
        return view('department-single', ['S_Department' => $S_Department]);
    }
}
