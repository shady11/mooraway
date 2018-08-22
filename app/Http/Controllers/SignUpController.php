<?php

namespace App\Http\Controllers;

use App\Http\Requests\SignUpRequest;
use App\User;
use Illuminate\Support\Facades\Auth;

/**
 * Class SignUpController
 * @package App\Http\Controllers
 */
class SignUpController extends Controller
{
    /**
     * @param SignUpRequest $request
     */
    public function store(SignUpRequest $request)
    {
        $attributes = $request->all();
        $attributes['password'] = bcrypt($attributes['password']);
        $attributes['name'] = $attributes['email'];
        $user = User::create((array)$attributes);
        Auth::login($user);
    }
}
