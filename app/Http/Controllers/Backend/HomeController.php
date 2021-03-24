<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Category;
use App\Models\Comment;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('backend.dashboard',[
            'users' => User::all(),
            'books' => Book::latest()->get(),
            'categories' => Category::all(),
            'comments' => Comment::all()
        ]);
    }
}
