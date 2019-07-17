<?php
Route::get('/', function() {
    return redirect(route('frontend.homes'));
});

Route::get('/frontend', function() {
    return redirect(route('frontend.homes'));
});

Route::name('frontend.')->prefix('frontend')->group(function() {

    Route::get('homes', 'frontend\HomesController')->name('homes');
   

    Route::get('eventdetail', 'frontend\EventdetailController@index')->name('eventdetail');
    Route::get('hallabout', 'frontend\HallaboutController@index')->name('hallabout');



    Route::get('contact', 'frontend\ContactController@index')->name('contact');

    Route::get('frontend/admin/dashboard', 'DashboardController@index')->middleware('auth')->name('admin.dashboard');

    Route::get('about', 'frontend\AboutController@index')->name('about');
    Route::get('properties', 'frontend\PropertiesController@index')->name('properties');
      
});

 Route::post('/hall_search',[ 'uses'=>'ExampleController@index', 'as'=> 'hall_search' ]);

Route::get('home', function() {
    return redirect(route('admin.dashboard'));
});

Route::name('admin.')->prefix('admin')->middleware('auth')->group(function() {

    Route::get('dashboard', 'DashboardController')->name('dashboard');

    Route::get('users/roles', 'UserController@roles')->name('users.roles');
    Route::resource('users', 'UserController', [
        'names' => [
            'index' => 'users'
        ]
   ]);

    Route::resource('event', 'EventTypeController', [
        'names' => [
            'index' => 'event'
        ]
    ]);
     Route::post('event_update', 'EventTypeController@update')->name('event_update.update');

    Route::resource('eventhall', 'EventHallController', [
        'names' => [
            'index' => 'eventhall'
        ]
    ]);

   Route::resource('state', 'StateController', [
        'names' => [
            'index' => 'state'
        ]

    ]);
   Route::resource('townships', 'TownshipController', [
        'names' => [
            'index' => 'townships'
        ]
    
    ]);

    Route::resource('city', 'CityController', [
        'names' => [
            'index' => 'city'
        ]
    ]);

    Route::resource('contact','ContactController', [
        'names' => [
            'index' => 'contact'
        ]
    ]);
Route::get('googlemap', 'ContactController@map');

Route::get('googlemap/direction', 'ContactController@direction');

    Route::resource('address', 'AddressController', [
        'names' => [
            'index' => 'address'
                
        ]
    ]);
        

    Route::resource('hall', 'HallController', [
        'names' => [
            'index' => 'hall'
        ]
    ]);
    
    Route::post('hall_update', 'HallController@update')->name('hall_update.update');

    

 });




Route::middleware('auth')->get('logout', function() {
    Auth::logout();
    return redirect(route('login'))->withInfo('You have successfully logged out!');
})->name('logout');

Auth::routes(['verify' => true]);

Route::name('js.')->group(function() {
    Route::get('dynamic.js', 'JsController@dynamic')->name('dynamic');
});

// Get authenticated user
Route::get('users/auth', function() {
    return response()->json(['user' => Auth::check() ? Auth::user() : false]);
});

