<?php

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

$router->group(['prefix'=>'ota-red-api'], function () use ($router){
    $router->get('reservations',
        'ReservationController@showAllReservations'
    );

        $router->get('new_reservations',
            'ReservationController@showNewReservations'
        );

    $router->get('reservations/{id}', 
        'ReservationController@showOneReservation'
    );

    $router->post('reservations', 
        'ReservationController@create'
    );

    $router->put('reservations/{id}', 
        'ReservationController@update'
    );

    $router->delete('reservations/{id}', 
        'ReservationController@delete'
    );
     //===================Invoices=======================//

    $router->get('invoices',
        'InvoiceController@showAllInvoices'
    );

    $router->get('new_invoices',
        'InvoiceController@showNewInvoices'
    );

    $router->get('invoices/{id}', 
        'InvoiceController@showOneInvoice'
    );

    $router->post('invoices', 
        'InvoiceController@create'
    );

    $router->put('invoices/{id}', 
        'InvoiceController@update'
    );

    $router->delete('invoices/{id}', 
        'InvoiceController@delete'
    );
});

//Github webhook1//
$router->post('deploy', 'DeployController@deploy');

//Refresh Hook DO NOT TOUCH
$router->get('refresh', 'RefreshController@refresh');
