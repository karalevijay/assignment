<?php

/** @var \Laravel\Lumen\Routing\Router $router */
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

$router->post('/login', [
    'as' => 'login', 'uses' => 'AuthController@login'
]);

$router->post('/loanStatusCheck', [
    'as' => 'loanStatusCheck', 'uses' => 'LoanProcessController@loanStatusCheck'
]);

$router->post('/loanStatusUpdate', [
    'as' => 'loanStatusUpdate', 'uses' => 'LoanProcessController@loanStatusUpdate'
]);

$router->post('/payLoanEMI', [
    'as' => 'payLoanEMI', 'uses' => 'LoanProcessController@payLoanEMI'
]);

$router->post('/loanRequest', [
    'as' => 'loanRequest', 'uses' => 'LoanProcessController@loanRequest'
]);
