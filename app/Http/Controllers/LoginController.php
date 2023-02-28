<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login() {
        return '<h2>Login</h2><p>This is login page</p>';
    }
}
