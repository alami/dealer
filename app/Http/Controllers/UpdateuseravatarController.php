<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UpdateuseravatarController extends Controller
{
//    public function aaa ($id) {
//        return response('aaa don!');
//
//    }
    public function __invoke($id) {
        return response('updateuseravatar');
        }
}
