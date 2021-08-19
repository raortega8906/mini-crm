<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::latest()->paginate(10);

        return view('admin.users.index', compact('users'));
    }

    public function show(User $user)
    {
        return view('admin.users.show', compact('user'));
    }

    public function edit(User $user)
    {
        return view('admin.users.edit', compact('user'));
    }

    public function update(UpdateUserRequest $request, User $user)
    {
        $user->update($request->validated());

        return redirect()->route('admin.users.edit', compact('user'))
            ->with('message', 'El usuario fue actualizado satisfactoriamente');
    }

    public function destroy(User $user)
    {
        if (auth()->user() != $user) {
            $user->delete();

            return redirect()->route('admin.users.index')->with('message', 'El usuario fue eliminado satisfactoriamente');
        }

        return redirect()->route('admin.users.index')->with('message', 'El usuario autenticado no puede ser eliminado');
    }
}
