<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TransmissionRequest;
use App\Models\Transmission;
use Illuminate\Http\Request;

class TransmissionController extends Controller
{
    public function index()
    {

        $transmissions = Transmission::all();

        return view('admin.transmission.index', compact('transmissions'));
    }

    public function add()
    {
        return view('admin.transmission.add');
    }

    public function show()
    {

    }

    public function edit()
    {

    }

    public function store(TransmissionRequest $request)
    {
        $data = $request->validated();

        Transmission::query()->create($data);

        return redirect()->route('transmissions')->with('success', 'Əlavə olundu!');
    }

    public function update()
    {

    }

    public function delete()
    {

    }
}
