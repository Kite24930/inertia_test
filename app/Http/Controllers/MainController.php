<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class MainController extends Controller
{
    public function index()
    {
        $data = [
            'hello' => 'Hello World! It\'s Inertia.js Test!',
        ];
        return Inertia::render('Dashboard', $data);
    }
}
