<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'image',
        'active',
        'metatitle',
        'metadescription',
        'keywords',
    ];

    protected $casts = [
        'active' => 'boolean'
    ];

    public function carmodels()
    {
        return $this->hasMany(Carmodel::class)->where('brand_id', $this->id);
    }

    public function cars()
    {
        return $this->hasMany(Car::class)->where('brand_id', $this->id);
    }
}
