<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class PostController extends Controller
{
    public function index()
    {
        $user = new User;
        $user->name = 'sameh';
        $user->save();
    }
}
