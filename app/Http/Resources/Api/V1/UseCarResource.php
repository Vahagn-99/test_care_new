<?php

namespace App\Http\Resources\Api\V1;

use Illuminate\Http\Resources\Json\JsonResource;

class UseCarResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'car_yaer' => $this->car_make_year,
            'response' => sprintf(
                'Пользователь %s использует автомобиль %s %s с номером %s',
                $this->user->name,
                $this->brand->name,
                $this->carModel->name,
                $this->car_number,
            ),
        ];
    }
}
