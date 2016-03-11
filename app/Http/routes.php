<?php

Route::get('/', function () {
    return redirect()->route('admin::activate');
});

Route::get('message', function () {
    $app = PHPRedis::connection();
$app->set("masterpowers", "Yeah Baby Yeah");
print_r($app->get("masterpowers"));
});

Route::group(['middleware' => ['web']], function () {
    Route::group(['prefix' => 'admin/{account_id}', 'namespace' => 'Admin', 'as' => 'admin/{account_id}'], function () {
        Route::get('activate', function ($accountId) {
            return $accountId;
        })->name('activate');
    });
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
