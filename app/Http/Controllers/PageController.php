<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Document;
use App\Models\Employee;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $blogs = Blog::orderBy('created_at', 'desc')->limit(3)->get();
        return view('frontend.home', compact('blogs'));
    }

    public function about()
    {
        $employees = Employee::all();
        return view('frontend.pages.about', compact('employees'));
    }

    public function documents()
    {
        $documents = Document::all();
        return view('frontend.pages.documents', compact('documents'));
    }

    public function contacts()
    {
        return view('frontend.pages.contacts');
    }

    public function interest()
    {
        return view('frontend.pages.interest');
    }

    public function client()
    {
        return view('frontend.pages.toBeClient');
    }

    public function trader()
    {
        return view('frontend.pages.toBeTrader');
    }

    public function consulting()
    {
        return view('frontend.pages.consultingActivity');
    }

    public function blog()
    {
        $clanky = Blog::all();
        return view('frontend.pages.blog', compact('clanky'));
    }

    public function articleblog($slug)
    {
        $blog = Blog::where('slug', $slug)->firstOrFail();
        $blogs = Blog::whereNot('id', $blog->id)->inRandomOrder()->limit(3)->get();
        return view('frontend.pages.articleblog', compact('blog', 'blogs'));
    }


}
