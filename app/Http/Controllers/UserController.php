<?php

namespace App\Http\Controllers;

class UserController extends Controller {

    public function __construct() {

    }

    public function store(Request $request) {
        $user = new User($request->all());
        $user->save();
        return $user;
    }

}
