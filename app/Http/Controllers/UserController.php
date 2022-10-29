<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{

    public function index() {
        $users = User::all();

        $users_data = [];

        foreach($users as $user) {
            array_push($users_data, ['label' => $user->name, 'value' => $user->id]);
        }

        return view('welcome')->with(['users' => $users_data]);
    }

    public function test(Request $request) {
        dd($request->all());
    }
}
