<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // $cars = Car::get();

        // $cars = Car::where('published_at', '!=', null)->get();

        // $cars = Car::where('published_at', '!=', null)->first();

        // $car = Car::where('published_at', '!=', null)
        //     ->where('user_id', 1)
        //     ->orderBy('published_at', 'desc')
        //     ->limit(2)
        //     ->get();

        // dump($car);

        // $car = new Car();
        // $car->maker_id = 1;
        // $car->model_id = 1;
        // $car->year = 1900;
        // $car->price = 123;
        // $car->vin = 123;
        // $car->mileage = 123;
        // $car->car_type_id = 1;
        // $car->fuel_type_id = 1;
        // $car->user_id = 1;
        // $car->city_id = 1;
        // $car->address = 'lorem';
        // $car->phone = '123';
        // $car->description = null;
        // $car->published_at = now();
        // $car->save();


        $carData = [
            'maker_id' => 1,
            'model_id' => 1,
            'year' => 2024,
            'price' => 20000,
            'vin' => '999',
            'mileage' => 5000,
            'car_type_id' => 1,
            'fuel_type_id' => 1,
            'user_id' => 1,
            'city_id' => 1,
            'address' => 'Something',
            'phone' => '999',
            'description' => null,
            'published_at' => now(),
        ];


        // Approach 1
        $car = Car::create($carData);


        // Approach 2
        $car2 = new Car();
        $car2->fill($carData);
        $car2->save();


        // Approach 3
        $car3 = new Car($carData);
        $car3->save();

        return view('home.index');
    }
}
