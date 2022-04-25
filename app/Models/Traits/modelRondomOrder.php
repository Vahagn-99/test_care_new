<?php

namespace App\Models\Traits;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

trait modelRondomOrder
{
    /**
     * Get a random item instance for the model.
     *
     * @param  mixed  $parameters
     * @return App\Models\Model
     */

    public function getInRondomOrder()
    {
        $randomOrder = (new self)->find(rand(1, ((new self)->count() - 1)));
        return $randomOrder;
    }
}
