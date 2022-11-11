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


    public function search(Request $request)
    {
        $users = User::where('name', 'like', '%' . $request->item . '%')
            ->orWhere('email', 'like', '%' . $request->item . '%')
            ->orWhere('reg_number', 'like', '%' . $request->item . '%')
            ->orWhere('phone_number', 'like', '%' . $request->item . '%')
            ->paginate();

        return view('users.index', compact('users'));
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
