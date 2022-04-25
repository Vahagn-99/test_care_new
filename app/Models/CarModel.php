<?php

namespace App\Models;

use App\Models\Traits\modelRondomOrder;
use Database\Factories\CarModelFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarModel extends Model
{
    use HasFactory, modelRondomOrder;

    protected $fillable = [
        'id', 'name'
    ];

    public function cars()
    {
        return $this->belongsTo(Cars::class, 'id', 'model_id');
    }

    protected static function newFactory()
    {
        return new CarModelFactory();
    }
}
