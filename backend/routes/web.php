<?php

/** @var \Laravel\Lumen\Routing\Router $router */

use App\Dataclasses\LoginPostData;
use App\Helper\Helper;
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
use Firebase\JWT\JWT;
use Hidehalo\Nanoid\Client;
use Illuminate\Http\Request;

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
    return view(
        'admin',
        ['data' => json_encode(
            [
                'baseUrl' => env('APPLICATION_BASE_URL')
            ]
        )]
    );
});

$router->get('/items', function () use ($router) {
    return view(
        'items',
        ['data' => json_encode(
            [
                'baseUrl' => env('APPLICATION_BASE_URL')
            ]
        )]
    );
});

$router->get('/customers', function () use ($router) {
    return view(
        'customers',
        ['data' => json_encode(
            [
                'baseUrl' => env('APPLICATION_BASE_URL')
            ]
        )]
    );
});

$router->get('/kiosks', function () use ($router) {
    return view(
        'kiosks',
        ['data' => json_encode(
            [
                'baseUrl' => env('APPLICATION_BASE_URL')
            ]
        )]
    );
});

$router->get('/users', function () use ($router) {
    return view(
        'users',
        ['data' => json_encode(
            [
                'baseUrl' => env('APPLICATION_BASE_URL')
            ]
        )]
    );
});

$router->get('/statistics', function () use ($router) {
    return view(
        'statistics',
        ['data' => json_encode(
            [
                'baseUrl' => env('APPLICATION_BASE_URL')
            ]
        )]
    );
});





$router->get('/gen-secret', function () use ($router) {
    return (new Client())->generateId(size: 32);
});



$router->group(['prefix' => '/api/v1'], function () use ($router) {
    // Login
    $router->post('/login', function (Request $request) use ($router) {
        $l = new LoginPostData;

        Helper::deserialize(
            $request->getContent(),
            $l
        );

        return response()->json($l, 200);
    });

    $router->post('/admin-login', function (Request $request) use ($router) {
        $l = new LoginPostData;

        Helper::deserialize(
            $request->getContent(),
            $l
        );

        // return microtime(true) * 1000;
        if (env('ADMIN_PASSPHRASE') == null) {
            return response('Admin passphrase has not been set yet.', 403);
        } else if (env('ADMIN_PASSPHRASE') == '') {
            return response('Admin passphrase is empty.', 403);
        } else if (env('ADMIN_PASSPHRASE') != $l->password) {
            return response('Admin passphrase does not match.', 403);
        } else {
            return JWT::encode([
                'admin' => true,
                'exp' => time() + (86400 * 365 * 10)
            ], env('JWT_SECRET'), 'HS256');
        }
    });


    $router->group(['middleware' => 'filter'], function () use ($router) {
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
        // Transaction
        $router->get('/transactions', function () use ($router) {
            return Transaction::all();
        });
        // UoM
        $router->get('/unitofmeasurements', function () use ($router) {
            return UnitOfMeasurement::all();
        });
        // Users
        $router->get('/users', function () use ($router) {
            return User::all();
        });
    });
});
