<?php

namespace App\Http\Controllers;

use App\Models\Thread;
use Illuminate\Http\Request;
use function Symfony\Component\Translation\t;

class HomeController extends Controller
{
    public function index(){
        $threads = Thread::with('user')
            ->withCount('topics')
            ->get();
        return view('home.index', compact('threads'));
    }
}

