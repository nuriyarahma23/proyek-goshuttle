<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();



// $routes->get("/blog/api/alls", "\Modules\Blog\Controllers\Api\Blog::index",['filter' => 'cors']);



$routes->group('modules/backend/paymethods',["filter" => "cors","namespace" => "\Modules\Paymethod\Controllers"], function($routes)
{
    $routes->get('new', 'Paymethod::new',['as' => 'new-paymethod']);
    $routes->post('', 'Paymethod::create',['as' => 'create-paymethod']);
    $routes->get('', 'Paymethod::index',['as' => 'index-paymethod']);
    $routes->get('(:segment)/edit', 'Paymethod::edit/$1',['as' => 'edit-paymethod']);
    $routes->put('(:segment)', 'Paymethod::update/$1',['as' => 'update-paymethod']);
    $routes->delete('(:segment)', 'Paymethod::delete/$1',['as' => 'delete-paymethod']);
    
});




$routes->group('modules/backend/paymentgateways',["filter" => "cors","namespace" => "\Modules\Paymethod\Controllers"], function($routes)
{
    $routes->get('new', 'PaymentGateway::new',['as' => 'new-paymentgateway']);
    $routes->post('', 'PaymentGateway::create',['as' => 'create-paymentgateway']);
    $routes->get('', 'PaymentGateway::index',['as' => 'index-paymentgateway']);
    $routes->get('(:segment)/edit', 'PaymentGateway::edit/$1',['as' => 'edit-paymentgateway']);
    $routes->put('(:segment)', 'PaymentGateway::update/$1',['as' => 'update-paymentgateway']);
    $routes->delete('(:segment)', 'PaymentGateway::delete/$1',['as' => 'delete-paymentgateway']);
    
});


$routes->group('modules/backend/paystacks',["filter" => "cors","namespace" => "\Modules\Paymethod\Controllers"], function($routes)
{
    $routes->get('new', 'Paystack::new',['as' => 'new-paystack']);
    $routes->post('', 'Paystack::create',['as' => 'create-paystack']);
    $routes->get('(:segment)/edit', 'Paystack::edit/$1',['as' => 'edit-paystack']);
    $routes->put('(:segment)', 'Paystack::update/$1',['as' => 'update-paystack']);
    
});


$routes->group('modules/backend/paypals',["filter" => "cors","namespace" => "\Modules\Paymethod\Controllers"], function($routes)
{
    $routes->get('new', 'Paypal::new',['as' => 'new-paypal']);
    $routes->post('', 'Paypal::create',['as' => 'create-paypal']);
    $routes->get('(:segment)/edit', 'Paypal::edit/$1',['as' => 'edit-paypal']);
    $routes->put('(:segment)', 'Paypal::update/$1',['as' => 'update-paypal']);
    
});



$routes->group('modules/backend/stripes',["filter" => "cors","namespace" => "\Modules\Paymethod\Controllers"], function($routes)
{
    $routes->get('new', 'Stripe::new',['as' => 'new-stripe']);
    $routes->post('', 'Stripe::create',['as' => 'create-stripe']);
    $routes->get('(:segment)/edit', 'Stripe::edit/$1',['as' => 'edit-stripe']);
    $routes->put('(:segment)', 'Stripe::update/$1',['as' => 'update-stripe']);
    
});



$routes->group('modules/backend/razors',["filter" => "cors","namespace" => "\Modules\Paymethod\Controllers"], function($routes)
{
    $routes->get('new', 'Razor::new',['as' => 'new-razor']);
    $routes->post('', 'Razor::create',['as' => 'create-razor']);
    $routes->get('(:segment)/edit', 'Razor::edit/$1',['as' => 'edit-razor']);
    $routes->put('(:segment)', 'Razor::update/$1',['as' => 'update-razor']);
    
});






$routes->group('modules/api/v1/paymethods',["filter" => "cors","namespace" => "\Modules\Paymethod\Controllers\Api"], function($routes)
{
  $routes->get('', 'Paymentgateway::paymentGateway');
  $routes->get('paypal', 'Paymentgateway::paypal');
  $routes->get('paystack', 'Paymentgateway::paystack');
  $routes->get('stripe', 'Paymentgateway::stripe');
  $routes->get('razor', 'Paymentgateway::razor');

});






