<?php

use App\Http\Controllers\marcKetto;
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

Route::get('/marcKetto/1', [marcKetto::class, 'index1']);
Route::get('/marcKetto/2', function () {
    $technikak = [
        [
            'id' => 1,
            'name' => 'PHP',
            'description' => 'backend'
        ],
        [
            'id' => 2,
            'name' => 'Angular',
            'description' => 'frontend'
        ],
        [
            'id' => 3,
            'name' => 'React',
            'description' => 'frontend'
        ]
        ];
        return $technikak;
});
Route::get('/marcKetto/3', [marcKetto::class, 'index']);
