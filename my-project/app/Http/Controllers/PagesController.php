<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Http\Requests\CreateMessageRequest;

class PagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('example', ['except' => ['home']]);
    }
    public function home()
    {
        return view('home');
    }
    public function contact()
    {
        return view('contacts');
    }
    public function message(CreateMessageRequest $request)
    {
        $data = $request->all();
        return back()
        ->with('info', 'your message has been sent successfully :)');
    }
    public function greeting($name = "Guest")
    {
        $html = "<h2>HTML Content</h2>";
        $script = "<script>alert('XSS problem - Cross Site Scripting!')</script>";
        $consoles = ["PlayStation", "XboxOne", "Wii U"];
        return view('greeting', compact('name', 'html', 'script', 'consoles'));
    }
}
