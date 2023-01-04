<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\DriveRequest;
use App\Models\Drive;
use App\Models\Fuel;
use Illuminate\Http\Request;

class DriveController extends Controller
{
    public function index()
    {
        $drives = Drive::all();

        return view('admin.drive.index', compact('drives'));
    }

    public function add()
    {
        return view('admin.drive.add');
    }

    public function show()
    {

    }

    public function edit()
    {

    }

    public function store(DriveRequest $request)
    {
        $data = $request->validated();

        Drive::query()->create($data);

        return redirect()->route('drives')->with('success', 'Əlavə olundu!');
    }

    public function update()
    {

    }

    public function delete()
    {

    }
}
