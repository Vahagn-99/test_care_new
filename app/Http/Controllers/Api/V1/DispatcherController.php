<?php

namespace App\Http\Controllers\Api\V1;

use App\Facades\UseCar;
use App\Http\Controllers\Api\AuthController;
use App\Traits\GetAuthUser;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\V1\AddUserRequest;
use App\Http\Requests\Api\V1\CarUpdateRequest;
use App\Models\Car;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class DispatcherController extends Controller
{
    use  GetAuthUser;

    protected const USER_ID = 2; //only for test

    /**
     * rent car for an auth user if user don't hav a car now.
     *
     * @param  mixed  $parameters
     * @return App\Models\Model\User
     */
    public function rentCar(CarUpdateRequest $request, $carId)
    {
        $user = $this->getAuthUser($request); // get authorize user
        dd($user);
        if (!$user->car) {
            // $user->id
            $request['user_id'] = $user->id;
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

    /**
     * detach car from an auth user.
     *
     * @param  mixed  $parameters
     * @return App\Models\Model\User
     */
    public function surrenderCar(User $user)
    {
        $user->car->delete();
        return response($user, 204);
    }

    /**
     * Get an auth user.
     *
     * @param  mixed  $parameters
     * @return App\Models\Model\User
     */
    public function addUser(AddUserRequest $request)
    {
        $newUser = (new AuthController)->register($request);
        return response($newUser, 201);
    }
}
