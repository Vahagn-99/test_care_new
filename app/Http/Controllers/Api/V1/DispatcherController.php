<?php

namespace App\Http\Controllers\Api\V1;

use App\Facades\UseCar;
use App\Traits\GetAuthUser;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\V1\CarUpdateRequest;
use App\Models\Car;
use App\Models\User;
use Illuminate\Http\Request;

class DispatcherController extends Controller
{
    use GetAuthUser;

    protected const USER_ID = 2;
    public function rentCar(CarUpdateRequest $request, $carId)
    {
        $user = $this->getAuthUser() ?? 1; // get authorize user
        if (true) {
            // $user->id
            $request['user_id'] = [self::USER_ID];
            $response = UseCar::update($request, $carId);
        } else {
            $response = [
                'message' => sprintf(
                    '%s вы уже используйте автомобиль %s %s с номером %s',
                    $user->name,
                    $user->car->brand->name,
                    $user->car->carModel->name,
                    $user->car->car_number,
                ),
            ];
        }
        return $response;
    }
}
