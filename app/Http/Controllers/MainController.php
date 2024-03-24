<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

class MainController extends Controller
{
    public function form()
    {
        return Inertia::render('form', [
            'user' => 'Roman',
        ]);
    }
}
