<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\FuelRequest;
use App\Models\Fuel;
use Illuminate\Http\Request;

class FuelController extends Controller
{
    public function index()
    {
        $fuels = Fuel::all();

        return view('admin.fuel.index', compact('fuels'));
    }

    public function add()
    {
        return view('admin.fuel.add');
    }

    public function show()
    {
        
    }

    public function edit()
    {
        
    }

    public function store(FuelRequest $request)
    {
        $data = $request->validated();

        Fuel::query()->create($data);

        return redirect()->route('fuels')->with('success', 'Əlavə olundu!');
    }

    public function update()
    {
        
    }

    public function delete()
    {
        
    }
}
