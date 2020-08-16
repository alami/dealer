<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class InvokeController extends Controller
{
    public function __invoke(User $user) {
        return response('InvokeController Done !');
        }
}
