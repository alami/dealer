<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UpdateUserAvatar extends Controller
{
    public function __invoke(User $user) {
        return view('updateuseravatar');
        }
}
