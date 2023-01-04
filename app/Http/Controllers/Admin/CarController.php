<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CarRequest;
use App\Models\Available;
use App\Models\Brand;
use App\Models\Car;
use App\Models\CarImage;
use App\Models\Carmodel;
use App\Models\Drive;
use App\Models\Fuel;
use App\Models\Transmission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::query()->paginate(10);

        return view('admin.car.index', compact('cars'));
    }

    public function add()
    {
        $brands = Brand::query()->where('active', true)->get();
        $fuels = Fuel::all();
        $drives = Drive::all();
        $transmissions = Transmission::all();
        $availables = Available::all();

        return view('admin.car.add', compact('brands', 'fuels', 'drives', 'transmissions', 'availables'));
    }

    public function fetchCarmodel(Request $request)
    {
        $data['carmodels'] = Carmodel::query()
            ->where("brand_id", $request->brand_id)
            ->get(['id', 'title']);

        return response()->json($data);
    }

    public function show(Car $car)
    {
        $brands = Brand::query()->where('active', true)->get();
        $fuels = Fuel::all();
        $drives = Drive::all();
        $transmissions = Transmission::all();
        $availables = Available::all();

        return view('admin.car.show', compact('car','brands', 'fuels', 'drives', 'transmissions', 'availables'));
    }

    public function edit()
    {

    }

    public function store(CarRequest $request)
    {
        $data = $request->validated();

        $car = Car::query()->create($data);

        $files = $request->file('images');

        if($request->hasFile('images'))
        {
            foreach ($files as $file) {
                $file = Storage::disk('public')->put('images/cars/' .$car->id, $file);

                $data = [
                    'car_id' => $car->id,
                    'image' => $file
                ];

                CarImage::query()->create($data);
            }

            return redirect()->route('cars')->with('success', 'Əlavə olundu!');
        }

        return false;

    }

    public function update()
    {
        return redirect()->back();
    }

    public function delete()
    {

    }
}
