<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

class HomeController extends ParentController
{
    public function index()
    {
        return Inertia::render('Dashboard/index');
    }
}
