<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Notifications\PermitNotification;
use Illuminate\Http\Request;

class PermitController extends Controller
{
    public function permits()
    {
        return view('permit');
    }

    public function application()
    {
        $users = User::all();

        foreach ($users as $user) {
            if ($user->is_admin) {
                $user->notify(new PermitNotification(auth()->user()->name));
            }
        }

        return redirect()->route('permits.permits')->with('status', 'Su solicitud fue enviada vía email satisfactoriamente');
    }
}
