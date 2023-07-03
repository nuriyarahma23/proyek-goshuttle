<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();




$routes->group('modules/backend/agents',["filter" => "cors","namespace" => "\Modules\Agent\Controllers"], function($routes)
{
    $routes->get('new', 'Agent::new',['as' => 'new-agent']);
    $routes->post('', 'Agent::create',['as' => 'create-agent']);
    $routes->get('', 'Agent::index',['as' => 'index-agent']);
    $routes->get('(:segment)/edit', 'Agent::edit/$1',['as' => 'edit-agent']);
    $routes->put('(:segment)/(:segment)', 'Agent::update/$1/$2',['as' => 'update-agent']);
    $routes->delete('(:segment)', 'Agent::delete/$1',['as' => 'delete-agent']);

    // $routes->get('commission/(:segment)', 'Agent::agentCommissionDetails/$1',['as' => 'commission-agent']);

    $routes->get('status/(:segment)', 'Agent::status/$1',['as' => 'status-agent']);

    $routes->get('transaction/(:segment)', 'Agent::agentTransactionDetails/$1',['as' => 'transaction-agent']);
    $routes->post('date/range', 'Agent::agentTranDateRange',['as' => 'trandaterange-agent']);
    
});

