<?php

// Route::get('message', function () {
//     $app = PHPRedis::connection();
// $app->set("masterpowers", "Yeah Baby Yeah");
// print_r($app->get("masterpowers"));
// });

Route::group(['middleware' => ['web']], function () {
    Route::group(['prefix' => '/admin/{account_id}', 'namespace' => 'Admin', 'as' => 'admin::', 'domain' => '{account}.royalflushnetwork.dev'], function () {
       
        Route::any('{link}', function($link,$accountId,$account){
        	return $link . ' ' . $accountId . ' ' . $account;
        })->name('link')->where(array('account_id' => '[\d+]+', 'link' => '[[a-z0-9-]+', 'account' => '[[a-z0-9-]+'));
    });
     Route::auth();
     Route::get('/home', [
    	'middleware' => 'roles',
    	'roles' => ['admin'],
    	'uses' => 'HomeController@index']
    	);
});

//Route::get('/profile', 'X@showProfile')->name('profile');
// In View You Can do This // return redirect()->route('profile');
/* List Of Available Route Method
Route::get($uri, $callback);
Route::post($uri, $callback);
Route::put($uri, $callback);
Route::patch($uri, $callback);
Route::delete($uri, $callback);
Route::options($uri, $callback);
Route::match($uri, $callback);
Route::any($uri, $callback);
$route = Route::current();

$name = $route->getName();

$actionName = $route->getActionName();
*/

