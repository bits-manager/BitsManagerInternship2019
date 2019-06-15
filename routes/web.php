<?php
Route::get('/', function() {
    return redirect(route('admin.dashboard'));
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
<<<<<<< HEAD

    Route::resource('event', 'EventTypeController', [
        'names' => [
            'create' => 'event'
        ]
    });
       Route::get('admin/event/create','EventTypeController@create')->name('admin.event.create');
      
       Route::get('admin/event/store','EventTypeController@create')->name('admin.event.store');

       Route::get('admin/event/index','EventTypeController@create')->name('admin.event.index');
=======
    
>>>>>>> 870472dbde9e56641c2bed778e156c18ff99013c
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


