<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SettingsRequest;
use App\Models\Settings;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function index()
    {
        return view('admin.settings');
    }

    public function update(SettingsRequest $request)
    {
        $data = $request->validated();

        Settings::query()->first()->update($data);

        return redirect()->route('settings.index')->with('success', 'Qeyd olundu!');
    }
}
