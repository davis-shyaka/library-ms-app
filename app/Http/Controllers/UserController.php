<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {
        $users = User::paginate(3);

        return view('users.index', compact('users'));
    }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show(Request $request)
    {
        //
    }


    public function edit(User $request)
    {
        //
    }


    public function update(Request $request, User $user)
    {
        //
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index');
    }
}
