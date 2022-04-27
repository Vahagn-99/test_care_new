<?php

namespace App\Models;

use App\Traits\ModelRondomOrder;
use Database\Factories\CarFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory, ModelRondomOrder;

    protected $fillable = [
        'id', 'car_number', 'car_make_year', 'user_id', 'model_id', 'brand_id'
    ];

    public function carModel()
    {
        return $this->belongsTo(CarModel::class, 'model_id', 'id');
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class, 'brand_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    protected static function newFactory()
    {
        return new CarFactory();
    }
}
