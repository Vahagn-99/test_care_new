<?php

namespace App\Models;

use App\Models\Traits\modelRondomOrder;
use Database\Factories\CarFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory, modelRondomOrder;

    protected $fillable = [
        'id', 'car_number', 'car_make_year', 'user_id', 'model_id', 'brand_id'
    ];

    public function model()
    {
        return $this->hasMany(Model::class, 'model_id', 'id');
    }

    public function brand()
    {
        return $this->hasMany(Brand::class, 'brand_id', 'id');
    }

    public function user()
    {
        return $this->hasOne(User::class, 'user_id', 'id');
    }

    protected static function newFactory()
    {
        return new CarFactory();
    }
}
