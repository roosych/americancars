<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function carmodel()
    {
        return $this->belongsTo(Carmodel::class);
    }

    public function available()
    {
        return $this->belongsTo(Available::class);
    }

    public function images()
    {
        return $this->hasMany(CarImage::class);
    }

    public function transmission()
    {
        return $this->belongsTo(Transmission::class);
    }

    public function drive()
    {
        return $this->belongsTo(Drive::class);
    }

    public function fuel()
    {
        return $this->belongsTo(Fuel::class);
    }

    protected $fillable = [
        'brand_id',
        'carmodel_id',
        'description',
        'drive_id',
        'available_id',
        'transmission_id',
        'fuel_id',
        'price',
        'currency',
        'mileage',
        'mileage_total',
        'engine',
        'year',
        'vin',
        'active',
        'metatitle',
        'metadescription',
        'keywords',
    ];
}
