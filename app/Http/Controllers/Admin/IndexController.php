<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SettsRequest;
use App\Models\Car;
use Illuminate\Support\Facades\Config;

class IndexController extends Controller
{
    public function index()
    {
        $cars = Car::query()
            ->where('active', true)->paginate(10);

        return view('admin.dashboard', compact('cars'));
    }

}
