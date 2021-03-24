<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\Book;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function indexBook()
    {
        return view('frontend.books.index', [
            'books' => Book::query()->with('category')
            ->when('search', function($query){
                // use query model for search
                $query->search(request('search'));
            })->
            latest()->paginate(12),
        ]);
    }

    public function showBook(Book $book)
    {
        return view('frontend.books.show', compact('book'));
    }

    public function indexCategory()
    {
        return view('frontend.categories.index', [
            'categories' => Category::query()
            ->when('search', function($query){
                // use query model for search
                $query->search(request('search'));
            })->
            latest()->paginate(15),
        ]);
    }

    public function home()
    {
        return view('frontend.home', [
            'users' => User::all(),
            'books' => Book::all(),
        ]);
    }


    public function editUser(User $user)
    {
        return view('frontend.users.update', compact('user'));
    }

    public function updateUser(UserRequest $request, User $user)
    {
        $user->update($request->validated());
        return $this->redirectRoutes('home', 'Update successfully');
    }
}
