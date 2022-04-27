<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\V1\CarStoreRequest;
use App\Http\Requests\Api\V1\CarUpdateRequest;
use App\Http\Resources\Api\V1\UseCarResource;
use App\Models\Car;
use App\Models\User;
use Illuminate\Http\Request;

class UseCarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars = Car::get();
        return response(UseCarResource::collection($cars), 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Api\V1\CarStoreRequest\CarStoreRequest $request instance \Illuminate\Http\Request
     * @return \Illuminate\Http\Response
     */
    public function store(CarStoreRequest $request)
    {
        $newCar = Car::create($request->validated());
        return response(new UseCarResource($newCar), 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  integer  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $car = Car::find($id);
        if ($car)
            return response(new UseCarResource($car), 200);
        return response($car, 204);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Api\V1\CarStoreRequest\CarUpdateRequest $request instance \Illuminate\Http\Request
     * @param  integer  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CarUpdateRequest $request, $id)
    {
        $car = Car::find($id);
        if ($car)
            $car->update($request->validated());
        return response(new UseCarResource($car), 202);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  integer  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $car = Car::find($id);
        if ($car)
            $car->delete();
        return response('no data', 204);
    }
}
