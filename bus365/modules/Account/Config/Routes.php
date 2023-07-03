<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();



// $routes->get("/blog/api/alls", "\Modules\Blog\Controllers\Api\Blog::index",['filter' => 'cors']);



$routes->group('modules/backend/accounts',["filter" => "cors","namespace" => "\Modules\Account\Controllers"], function($routes)
{
    $routes->get('new', 'Account::new',['as' => 'new-account']);
    $routes->post('', 'Account::create',['as' => 'create-account']);
    $routes->get('', 'Account::index',['as' => 'index-account']);
    $routes->get('(:segment)', 'Account::show/$1',['as' => 'show-account']);
    $routes->get('(:segment)/edit', 'Account::edit/$1',['as' => 'edit-account']);
    $routes->put('(:segment)', 'Account::update/$1',['as' => 'update-account']);
    $routes->delete('(:segment)', 'Account::delete/$1',['as' => 'delete-account']);
    
});


$routes->group('modules/backend/accountheads',["filter" => "cors","namespace" => "\Modules\Account\Controllers"], function($routes)
{
    $routes->get('new', 'Accounthead::new',['as' => 'new-accounthead']);
    $routes->post('', 'Accounthead::create',['as' => 'create-accounthead']);
    $routes->get('', 'Accounthead::index',['as' => 'index-accounthead']);
    $routes->get('(:segment)/edit', 'Accounthead::edit/$1',['as' => 'edit-accounthead']);
    $routes->put('(:segment)', 'Accounthead::update/$1',['as' => 'update-accounthead']);
    $routes->delete('(:segment)', 'Accounthead::delete/$1',['as' => 'delete-accounthead']);
    
});







$routes->group('modules/api/v1/accounts',["filter" => "cors","namespace" => "\Modules\Tax\Controllers\Api"], function($routes)
{
  $routes->get('', 'Account::index');
});






