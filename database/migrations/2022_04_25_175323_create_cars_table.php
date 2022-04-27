<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('car_number')->comment('Номер машины такая по приколу ;)');
            $table->integer('car_make_year')->comment('год выпуска машины');
            $table->foreignIdFor(App\Models\CarModel::class, 'model_id')->onDelete('cascade');
            $table->foreignIdFor(App\Models\Brand::class, 'brand_id')->onDelete('cascade');
            $table->foreignIdFor(App\Models\User::class, 'user_id')->onDelete('cascade')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cars');
    }
}
