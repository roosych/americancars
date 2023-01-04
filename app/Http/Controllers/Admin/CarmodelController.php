<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CarmodelRequest;
use App\Models\Brand;
use App\Models\Carmodel;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CarmodelController extends Controller
{
    public function index()
    {

        $brands = Brand::all();
        return view('admin.carmodel.index', compact('brands'));
    }

    public function add()
    {
        $brands = Brand::all();
        return view('admin.carmodel.add', compact('brands'));
    }

    public function show()
    {

    }

    public function edit()
    {

    }

    public function store(CarmodelRequest $request)
    {
        $data = $request->validated();

        $data['slug'] = Str::slug($data['title'], '-', 'en');

        Carmodel::query()->create($data);

        return redirect()->route('carmodels')->with('success', 'Əlavə olundu!');;
    }

    public function update()
    {

    }

    public function delete()
    {

    }
}
