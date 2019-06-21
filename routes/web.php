<?php
Route::get('/', function() {
    return redirect(route('frontend.frontendhome'));
});

Route::get('/frontend', function() {
    return redirect(route('frontend.frontendhome'));
});

Route::name('frontend.')->prefix('frontend')->group(function() {

    Route::get('frontendhome', 'FrontendhomeController')->name('frontendhome');
    

   
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
    Route::resource('contacts', 'ContactController', [
        'names' => [
            'index' => 'contacts'
        ]
    ]);



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


