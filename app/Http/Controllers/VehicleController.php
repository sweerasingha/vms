<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Auth;

class VehicleController extends ParentController
{
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        if (Auth::user()->can('read_vehicles')) {
            return Inertia::render('Vehicle/Index');
        } else {
            $response['alert-danger'] = 'You do not have permission to read vehicles.';
            return redirect()->route('dashboard')->with($response);
        }
    }

    public function withSlugIndex(string $slug)
    {
        $response['slug'] = $slug;
        return Inertia::render('Vehicle/slug', $response);
    }
}
