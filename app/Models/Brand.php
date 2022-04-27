<?php

namespace App\Models;

use App\Traits\ModelRondomOrder;
use Database\Factories\BrandFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory, ModelRondomOrder;

    protected $fillable = [
        'id', 'name', 'maker', 'country'
    ];

    public function cars()
    {
        return $this->hasMany(Cars::class, 'brand_id', 'id');
    }

    protected static function newFactory()
    {
        return new BrandFactory();
    }
}
