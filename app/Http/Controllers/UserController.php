<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
        /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules = array(
            'last_name'       => 'required',
            'first_name'       => 'required',
            'email'       => 'required|email|unique:users,email',
            'password'       => 'required|min:8',
            'number'       => 'required|unique:users,number',
            'institut'       => 'required',
            'birth_date'       => 'required|date',
        );
        $validator = Validator::make($request->all(), $rules);

        // process the login
        if ($validator->stopOnFirstFailure()->fails()) {
            return Redirect::to(route('app.register'))
                ->withErrors($validator)
                ->withInput($request->except('password'));
        } else {
            // store
            $user = new User();
            $user->last_name       = $request->get('last_name');
            $user->first_name       = $request->get('first_name');
            $user->email       = $request->get('email');
            $user->password       = Hash::make($request->get('password'));
            $user->number       = $request->get('number');
            $user->institut       = $request->get('institut');
            $user->birth_date       = $request->get('birth_date');
            $user->notice = "";
            $user->is_admin = false;

            $user->save();
            Auth::login($user);
            // redirect
            Session::flash('message', 'Successfully created user!');
            return redirect(route("app.index"));
        }
    }

    public function login(Request $request)
    {

        $rules = array(
            'email'       => 'required|email',
            'password'       => 'required|min:8',
        );
        $validator = Validator::make($request->all(), $rules);
        if ($validator->stopOnFirstFailure()->fails()) {
            return Redirect::to(route('app.login'))
                ->withErrors($validator)
                ->withInput($request->except('password'));
        }
        $user = User::all()->where('email', $request->email)->first();

        if(Auth::attempt(["email" => $request->input("email"), "password" => $request->input("password")])){
            Auth::login($user);
            return redirect(route("app.index"));
        }
        return Redirect::to(route('app.login'))
                ->withErrors(["Email ou mot de passe erroné"])
                ->withInput($request->except('password'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
