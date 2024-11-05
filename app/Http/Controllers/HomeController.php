<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\CarFeatures;
use App\Models\CarImage;
use App\Models\CarType;
use App\Models\FuelType;
use App\Models\Maker;
use App\Models\Model;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        // User::factory()
        //     ->afterCreating(function (User $user) {
        //         dump($user);
        //     })
        //     ->create();


        $maker = Maker::factory()->create();


        Model::factory()
            ->count(5)
            ->for($maker)
            ->create();

        return view('home.index');
    }
}
