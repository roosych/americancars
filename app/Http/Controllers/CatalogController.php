<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Car;
use App\Models\Carmodel;
use App\Models\Fuel;
use App\Models\Transmission;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function brand(Brand $brand)
    {

        $cars = Car::query()
            ->where(['brand_id' => $brand->id, 'active' => true])
            ->get();

        //dd($cars);
        $transmissions = Transmission::all();
        $fuels = Fuel::all();

        return view('catalog.brand', compact('cars', 'brand', 'transmissions', 'fuels'));

    }

    public function carmodel(Brand $brand, Carmodel $carmodel)
    {

        // заглушка роута
        return redirect()->back();

//        $cars = Car::query()
//            ->where(['carmodel_id' => $carmodel->id, 'active' => true])
//            ->get();
//
//        return view('catalog.model', compact('cars', 'carmodel', 'brand'));

    }


    public function car(Brand $brand, Carmodel $carmodel, Car $car)
    {
        $car = Car::query()
            ->where('id', $car->id)
            ->firstOrFail();


        $other_offers = Car::query()
            ->where('active', true)
            ->inRandomOrder()
            ->limit(6)
            ->whereNot('id', $car->id)
            ->get();

        return view('catalog.car', compact('car', 'other_offers'));
    }

}
