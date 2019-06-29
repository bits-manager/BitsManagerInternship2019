<?php
Route::get('/', function() {
    return redirect(route('frontend.homes'));
});

Route::get('/frontend', function() {
    return redirect(route('frontend.homes'));
});

Route::name('frontend.')->prefix('frontend')->group(function() {

    Route::get('homes', 'frontend\HomesController')->name('homes');
    Route::get('contact', 'frontend\ContactController@index')->name('contact');
    Route::get('frontend/admin/dashboard', 'DashboardController@index')->middleware('auth')->name('admin.dashboard');
       });



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
    Route::resource('contacts','ContactController', [
        'names' => [
            'index' => 'contacts'
        ]
    ]);
    Route::resource('address', 'AddressController', [
        'names' => [
            'index' => 'address'
             
        ]
    ]);

<<<<<<< HEAD
    
=======
>>>>>>> 35add1d5ec89fe7a5ab5340f4ee31dea57039c27

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


