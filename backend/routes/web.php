<?php

/** @var \Laravel\Lumen\Routing\Router $router */

use App\Models\Item;
use App\Models\ItemGroup;
use App\Models\ItemPrice;
use App\Models\ItemsTransaction;
use App\Models\Kiosk;
use App\Models\StockInOut;
use App\Models\StockInOutsItems;
use App\Models\Transaction;
use App\Models\UnitOfMeasurement;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->group(['prefix' => '/api/v1'], function () use ($router) {
    // Item
    $router->get('/items', function () use ($router) {
        return Item::all();
    });
    // ItemGroup
    $router->get('/itemgroups', function () use ($router) {
        return ItemGroup::all();
    });
    // Item Price
    $router->get('/itemprices', function () use ($router) {
        return ItemPrice::all();
    });
    // ItemsTransactions
    $router->get('/itemstransactions', function () use ($router) {
        return ItemsTransaction::all();
    });
    // Kiosk
    $router->get('/kiosks', function () use ($router) {
        return Kiosk::all();
    });
    // StockInOut
    $router->get('/stockinouts', function () use ($router) {
        return StockInOut::all();
    });
    // StockInOutsItems
    $router->get('/stockinoutsitems', function () use ($router) {
        return StockInOutsItems::all();
    });
    // Item
    $router->get('/transactions', function () use ($router) {
        return Transaction::all();
    });
    // Item
    $router->get('/uoms', function () use ($router) {
        return UnitOfMeasurement::all();
    });
    // Item
    $router->get('/users', function () use ($router) {
        return User::all();
    });
});
