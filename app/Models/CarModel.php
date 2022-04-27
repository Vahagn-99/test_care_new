<?php

namespace App\Models;

use App\Traits\ModelRondomOrder;
use Database\Factories\CarModelFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarModel extends Model
{
    use HasFactory, ModelRondomOrder;

    protected $fillable = [
        'id', 'name'
    ];

    public function cars()
    {
        return $this->hasMany(Cars::class, 'model_id', 'id');
    }

    protected static function newFactory()
    {
        return new CarModelFactory();
    }
}
