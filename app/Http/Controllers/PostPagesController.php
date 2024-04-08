<?php

namespace App\Http\Controllers;

use App\Models\blog;
use Illuminate\Http\Request;
use App\Models\contactmessage;
use App\Models\appointment;
use App\Models\comment;

class PostPagesController extends Controller
{
    function StoreContact()
    {
        request()->all();

        request()->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|max:100',
            'subject' => 'required|alpa|max:255',
            'phone' => 'required|numeric|max:20',
            'message' => 'required'
        ]);

        $name = request()->name;
        $email = request()->email;
        $subject = request()->subject;
        $phone = request()->phone;
        $message = request()->message;

        $contact =   contactmessage::create([
            'name' => $name,
            'email' => $email,
            'subject' => $subject,
            'phone' => $phone,
            'message' => $message,
        ]);
        if (!$contact) {
            return  redirect(route('contact.create'));
        }
        return    redirect(route('confirmation.index'));
    }
    function StoreComment(blog $id)
    {
        $blog_id = $id->id;
        request()->all();
        request()->validate([
            'name' => 'required|string|max:100',
            'mail' => 'required|email|max:100',
            'comment' => 'required'
        ]);

        $name = request()->name;
        $email = request()->mail;
        $subject = request()->comment;

        comment::create([
            'username' => $name,
            'email' => $email,
            'comment_text' => $subject,
            'blog_id' => $blog_id
        ]);
        return  redirect(route('Blog.create', $blog_id));
    }

    function StoreAppointment()
    {

        request()->all();

        request()->validate([
            'department' => 'required',
            'doctor' => 'required',
            'date' => 'required',
            'time' => 'required',
            'name' => 'required|alpha',
            'phone' => 'required|numeric',
            'message' => 'required'
        ]);

        $department = request()->department;
        $doctor = request()->doctor;
        $date = request()->date;
        $time = request()->time;
        $name = request()->name;
        $phone = request()->phone;
        $message = request()->message;

        $appointment =   appointment::create([
            'department' => $department,
            'doctor' => $doctor,
            'date' => $date,
            'time' => $time,
            'name' => $name,
            'phone' => $phone,
            'message' => $message,
        ]);
        if (!$appointment) {
            return  redirect(route('confirmation.index'));
        }
        return    redirect(route('confirmationAPP.index'));
    }
}
