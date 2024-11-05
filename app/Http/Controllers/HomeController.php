<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\CarFeatures;
use App\Models\CarImage;
use App\Models\CarType;
use App\Models\FuelType;
use App\Models\Maker;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        // $car = Car::find(1);

        // dump($car->features, $car->primaryImage);

        // $car->features->update(['abs' => 0]);

        // $car = Car::find(2);

        // $carFeatures = new CarFeatures([
        //     'abs' => false,
        //     'air_conditioning' => false,
        //     'power_windows' => false,
        //     'power_door_locks' => false,
        //     'cruise_control' => false,
        //     'bluetooth_control' => false,
        //     'bluetooth_connectivity' => false,
        //     'remote_start' => false,
        //     'gps_navigation' => false,
        //     'heated_seats' => false,
        //     'climate_control' => false,
        //     'rear_parking_sensors' => false,
        //     'leather_seats'
        // ]);

        // $car->features()->save($carFeatures);


        // $image = new CarImage(['image_path' => 'something', 'position' => 2]);
        // $car->images()->save($image);

        // dd(['image_path' => 'something 2', 'position' => 3]);
        // $car->images()->create(['image_path' => 'something 2', 'position' => 3]);


        // $car->images()->saveMany([
        //     new CarImage(['image_path' => 'something', 'position' => 4]),
        //     new CarImage(['image_path' => 'something', 'position' => 5])
        // ]);


        // $car->images()->createMany([
        //     ['image_path' => 'something', 'position' => 6],
        //     ['image_path' => 'something', 'position' => 7]
        // ]);



        // $car = Car::find(1);

        // $carType = CarType::where('name', 'Sedan')->first();

        // $car->carType()->associate($carType);
        // $car->save();



        $car = Car::find(1);

        dd($car->favouredUsers);



        return view('home.index');
    }
}
