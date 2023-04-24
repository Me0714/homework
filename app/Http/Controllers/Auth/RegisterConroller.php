<?php

namespace App\Http\Controllers\Auth;

use App\Actions\Fortify\CreateNewUser;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function store(Request $request)
    {

        $newUser = (new CreateNewUser())->create($request->all());

        Auth::login($newUser);

        return redirect('/dashboard');
    }
}
