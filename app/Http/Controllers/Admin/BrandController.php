<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BrandRequest;
use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use function Symfony\Component\String\Slugger\slug;

class BrandController extends Controller
{
    public function index()
    {

        $brands = Brand::all();
        return view('admin.brand.index', compact('brands'));
    }

    public function add()
    {

        return view('admin.brand.add');
    }

    public function show()
    {

    }

    public function edit()
    {

    }


    // методы без вьюшек
    public function store(BrandRequest $request)
    {
        $data = $request->validated();

        $data['slug'] = Str::slug($data['title'], '-', 'en');

        //если пришел файл загружаем в папку и получаем путь
        if($request->hasFile('image')) {
            $data['image'] = Storage::disk('public')->put('images/brands', $data['image']);
        } else {
            // иначе путь равен null
            $data['image'] = null;
        }

        Brand::query()->create($data);

        return redirect()->route('brands')->with('success', 'Əlavə olundu!');;
    }

    public function update()
    {

}

    public function delete()
    {

    }
}
