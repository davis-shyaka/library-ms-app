<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{

    public function index()
    {
        $users = User::paginate();

        return view('users.index', compact('users'));
    }

    public function create()
    {
        $roles = Role::all();
        // dd($roles);
        return view('users.create', compact('roles'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'reg_number' => ['required', 'integer', 'unique:users'],
            'phone_number' => ['required', 'unique:users'],
            'password' => ['required', 'confirmed', 'min:6'],
            'role' => ['required']
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'reg_number' => $request->reg_number,
            'phone_number' => $request->phone_number,
            'password' => Hash::make($request->password),
        ]);

        $user->assignRole($request->role);
        // dd($user->roles);
        $role = $user->getRoleNames()[0];
        return redirect()->route('users.index')->with('message', 'Created ' . $user->name . ' as a "' . $role . '" successfully');;
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

    public function librarians(Request $request)
    {
        $users = User::role('librarian')->get();
        return view('users.index', compact('users'));
    }

    public function directors(Request $request)
    {
        $users = User::role('director')->get();
        return view('users.index', compact('users'));
    }
}
