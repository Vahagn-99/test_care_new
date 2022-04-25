<?php

namespace App\Models;

use App\Models\Traits\modelRondomOrder;
use Database\Factories\BrandFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory, modelRondomOrder;

    protected $fillable = [
        'id', 'name', 'maker', 'country'
    ];

    public function cars()
    {
        return $this->belongsTo(Cars::class, 'id', 'brand_id');
    }

    protected static function newFactory()
    {
        return new BrandFactory();
    }
}
