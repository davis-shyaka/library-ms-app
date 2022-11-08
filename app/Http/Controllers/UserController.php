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


    public function show(Request $task)
    {
        //
    }


    public function edit(User $task)
    {
        //
    }


    public function update(Request $request, User $task)
    {
        //
    }

    public function destroy(User $task)
    {
        //
    }
}
