<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\customer;

class UserController extends Controller
{
    public function create() {
        return view ("user");
    }
    public function store(Request $request) {
        $userData = customer::insert($request->all());
        if ($userData) {
            echo "saved";
        } else {
            echo "error";
        }
    }
}
