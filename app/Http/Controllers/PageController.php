<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use App\Mail\QuoteRequestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PageController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function services()
    {
        return view('pages.services');
    }

    public function portfolio()
    {
        return view('pages.portfolio');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function contactSubmit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:50',
            'message' => 'required|string|max:5000',
        ]);

        Mail::to(config('mail.admin_email'))->send(new ContactFormMail($validated));

        return back()->with('success', 'Your message has been sent successfully. We will get back to you soon!');
    }

    public function quote()
    {
        return view('pages.quote');
    }

    public function privacy()
    {
        return view('pages.privacy');
    }

    public function terms()
    {
        return view('pages.terms');
    }

    public function quoteSubmit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:50',
            'company' => 'nullable|string|max:255',
            'project_description' => 'required|string|max:10000',
            'project_type' => 'required|string|max:255',
            'budget' => 'nullable|string|max:255',
            'timeline' => 'required|string|max:255',
            'start_date' => 'nullable|date',
        ]);

        Mail::to(config('mail.admin_email'))->send(new QuoteRequestMail($validated));

        return back()->with('success', 'Your quote request has been submitted successfully. We will contact you shortly!');
    }
}
