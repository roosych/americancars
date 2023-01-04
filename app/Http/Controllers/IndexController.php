<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Car;

class IndexController extends Controller
{
    public function index()
    {
        $brands = Brand::query()->where('active', true)->get();

        $cars = Car::query()->where('active', true)->paginate(9);

        return view('index', compact('brands', 'cars'));
    }

}
