<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();



// $routes->get("/blog/api/alls", "\Modules\Blog\Controllers\Api\Blog::index",['filter' => 'cors']);



$routes->group('modules/backend/languages',["filter" => "cors","namespace" => "\Modules\Localize\Controllers"], function($routes)
{
    $routes->get('new', 'Localize::new',['as' => 'new-language']);
    $routes->post('', 'Localize::create',['as' => 'create-language']);
    $routes->get('', 'Localize::index',['as' => 'index-language']);
    $routes->get('(:segment)/edit', 'Localize::edit/$1',['as' => 'edit-language']);
    $routes->put('(:segment)', 'Localize::update/$1',['as' => 'update-language']);
    $routes->delete('(:segment)', 'Localize::delete/$1',['as' => 'delete-language']);
    
});


$routes->group('modules/backend/localizestrings',["filter" => "cors","namespace" => "\Modules\Localize\Controllers"], function($routes)
{
    $routes->get('new', 'Langstring::new',['as' => 'new-langstring']);
    $routes->post('', 'Langstring::create',['as' => 'create-langstring']);
    
    $routes->get('(:segment)/edit', 'Langstring::edit/$1',['as' => 'edit-langstring']);
    $routes->put('(:segment)', 'Langstring::update/$1',['as' => 'update-langstring']);
    $routes->delete('(:segment)', 'Langstring::delete/$1',['as' => 'delete-langstring']);
    
});

$routes->group('modules/backend/lanstrs/value',["filter" => "cors","namespace" => "\Modules\Localize\Controllers"], function($routes)
{
 
    $routes->post('', 'Lngstngvalue::update',['as' => 'update-lngstngvalue']);
    $routes->get('lang/(:segment)', 'Lngstngvalue::index/$1',['as' => 'index-lngstngvalue']);
   
    
});







$routes->group('modules/api/v1/roles',["filter" => "cors","namespace" => "\Modules\Localize\Controllers\Api"], function($routes)
{
  $routes->get('', 'Role::index');
});






