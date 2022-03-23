<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;

class UsersAdminController extends Controller
{
    // ...

    public function manage_users () {

        //....


        // Config page
        $title = "Users";

        // Data
        $users = Users::getAll();

        // Handle

        // Return view
        return view('admin.manage-users', [
            // ...
            'title' => $title,

            // ...
            'users' => $users
        ]);
    }
}
