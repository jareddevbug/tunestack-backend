<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/songs', function () {
    return [
        [
            "id" => 1,
            "title" => "Imagine",
            "artist" => "John Lennon",
            "key" => "C",
            "content_json" => [
                ["lyric" => "Imagine there's no heaven", "chord" => "C"],
                ["lyric" => "It's easy if you try", "chord" => "F"]
            ]
        ],
        // [
        //     "id" => 2,
        //     "title" => "Let It Be",
        //     "artist" => "The Beatles",
        //     "key" => "C",
        //     "content_json" => [
        //         ["lyric" => "When I find myself in times of trouble", "chord" => "C"],
        //         ["lyric" => "Mother Mary comes to me", "chord" => "G"]
        //     ]
        // ]
    ];
});