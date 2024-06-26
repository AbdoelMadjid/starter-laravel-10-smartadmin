<?php

namespace App\Http\Controllers\temp;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TemplateController extends Controller
{
    // intel
    public function index()
    {
        return view('dashboard');
    }
    public function about()
    {
        return view('about');
    }
}
