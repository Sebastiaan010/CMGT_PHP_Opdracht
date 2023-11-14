<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function index() {

        $users = [
            [
                'name' => 'Piet',
                'age' => 30,
            ],
            [
                'name' => 'Klaas',
                'age' => 25,
            ],
            [
                'name' => 'Albert',
                'age' => 17,
            ]
            ];

        return view(
            'dashboard',
            [
                'users' => $users
            ]

    );

    }

}
