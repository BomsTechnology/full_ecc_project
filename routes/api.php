<?php

use App\Http\Controllers\Api\AuthenticateController;
use App\Http\Controllers\Api\CityController;
use App\Http\Controllers\Api\ContinentController;
use App\Http\Controllers\Api\CountryController;
use App\Http\Controllers\Api\DepartmentController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\ZonedController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::post("/register", [AuthenticateController::class, 'register']);
Route::post("/login", [AuthenticateController::class, 'login']);
Route::post("/login-admin", [AuthenticateController::class, 'loginAdmin']);

Route::get("/continents", [ContinentController::class, 'index']);

Route::get("/zoneds", [ZonedController::class, 'index']);

Route::get("/countries", [CountryController::class, 'index']);

Route::get("/cities", [CityController::class, 'index']);

Route::get("/departments", [DepartmentController::class, 'index']);

Route::post("/users/type/{type}", [UserController::class, 'getByType']);

Route::apiResource('users', UserController::class);

Route::group(['middleware' => ['auth:sanctum', 'verified']], function () {

    Route::put("/users/confirmed/{user}", [UserController::class, 'confirmed']);
    Route::put("/users/toogle-blocked/{user}", [UserController::class, 'toogleBlocked']);

    Route::post("/continents", [ContinentController::class, 'store']);
    Route::get("/continents/{continent}", [ContinentController::class, 'show']);
    Route::put("/continents/{continent}", [ContinentController::class, 'update']);
    Route::delete("/continents/{continent}", [ContinentController::class, 'destroy']);

    Route::post("/zoneds", [ZonedController::class, 'store']);
    Route::get("/zoneds/{zoned}", [ZonedController::class, 'show']);
    Route::put("/zoneds/{zoned}", [ZonedController::class, 'update']);
    Route::delete("/zoneds/{zoned}", [ZonedController::class, 'destroy']);

    Route::post("/countries", [CountryController::class, 'store']);
    Route::get("/countries/{country}", [CountryController::class, 'show']);
    Route::put("/countries/{country}", [CountryController::class, 'update']);
    Route::delete("/countries/{country}", [CountryController::class, 'destroy']);

    Route::post("/cities", [CityController::class, 'store']);
    Route::get("/cities/{city}", [CityController::class, 'show']);
    Route::put("/cities/{city}", [CityController::class, 'update']);
    Route::delete("/cities/{city}", [CityController::class, 'destroy']);

    Route::post("/departments", [DepartmentController::class, 'store']);
    Route::get("/departments/{department}", [DepartmentController::class, 'show']);
    Route::put("/departments/{department}", [DepartmentController::class, 'update']);
    Route::delete("/departments/{department}", [DepartmentController::class, 'destroy']);

    Route::post("/logout", [AuthController::class, 'logout']);
});
