<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Commentaire;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class AppController extends Controller
{
    public function index()
    {
        $users = User::where("notice", '')->take(4)->get();
        $posts = Post::where("notice", '')->orderBy("created_at", "desc")->take(4)->get();
        $numposts = count(Post::all());
        $numcomentaires = count(Commentaire::all());
        $numusers = count(User::all());
        return view('pages.index', [
            "posts" => $posts,
            "users" => $users,
            "numposts" => $numposts,
            "numcomentaires" => $numcomentaires,
            "numusers" => $numusers,
        ]);
    }

    public function logout()
    {
        if (Auth::user()) {
            Auth::logout();
        }
        return redirect(route('app.index'));
    }

    public function about_us()
    {
        return view('pages.about-us');
    }

    public function contact_us()
    {
        return view('pages.contact');
    }

    public function forum()
    {
        $posts = Post::where("notice", '')->orderBy("updated_at", "desc")->paginate(5);
        return view('pages.forum.index', ["posts" => $posts]);
    }

    public function blog()
    {
        return view('pages.blog');
    }
    public function login(Request $request)
    {
        return view('pages.login');
    }

    public function register()
    {
        return view('pages.register');
    }
}
