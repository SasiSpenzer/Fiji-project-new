<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
| Middleware options can be located in `app/Http/Kernel.php`
|
*/

// Homepage Route
Route::group(['middleware' => ['web', 'checkblocked']], function () {
    Route::get('/', 'WelcomeController@welcome')->name('welcome');
});

// Authentication Routes
Auth::routes();

// Public Routes
Route::group(['middleware' => ['web', 'activity', 'checkblocked']], function () {

    // Activation Routes
    Route::get('/activate', ['as' => 'activate', 'uses' => 'Auth\ActivateController@initial']);

    Route::get('/activate/{token}', ['as' => 'authenticated.activate', 'uses' => 'Auth\ActivateController@activate']);
    Route::get('/activation', ['as' => 'authenticated.activation-resend', 'uses' => 'Auth\ActivateController@resend']);
    Route::get('/exceeded', ['as' => 'exceeded', 'uses' => 'Auth\ActivateController@exceeded']);

    // Socialite Register Routes
    Route::get('/social/redirect/{provider}', ['as' => 'social.redirect', 'uses' => 'Auth\SocialController@getSocialRedirect']);
    Route::get('/social/handle/{provider}', ['as' => 'social.handle', 'uses' => 'Auth\SocialController@getSocialHandle']);

    // Route to for user to reactivate their user deleted account.
    Route::get('/re-activate/{token}', ['as' => 'user.reactivate', 'uses' => 'RestoreUserController@userReActivate']);
});

// Registered and Activated User Routes
Route::group(['middleware' => ['auth', 'activated', 'activity', 'checkblocked']], function () {

    // Activation Routes
    Route::get('/activation-required', ['uses' => 'Auth\ActivateController@activationRequired'])->name('activation-required');
    Route::get('/logout', ['uses' => 'Auth\LoginController@logout'])->name('logout');
});

// Registered and Activated User Routes
Route::group(['middleware' => ['auth', 'activated', 'activity', 'twostep', 'checkblocked']], function () {

    //  Homepage Route - Redirect based on user role is in controller.
    Route::get('/home', ['as' => 'public.home',   'uses' => 'UserController@index']);

    // Show users profile - viewable by other users.
    Route::get('profile/{username}', [
        'as'   => '{username}',
        'uses' => 'ProfilesController@show',
    ]);
});

// Registered, activated, and is current user routes.
Route::group(['middleware' => ['auth', 'activated', 'currentUser', 'activity', 'twostep', 'checkblocked']], function () {

    // User Profile and Account Routes
    Route::resource(
        'profile',
        'ProfilesController', [
            'only' => [
                'show',
                'edit',
                'update',
                'create',
            ],
        ]
    );
    Route::put('profile/{username}/updateUserAccount', [
        'as'   => '{username}',
        'uses' => 'ProfilesController@updateUserAccount',
    ]);
    Route::put('profile/{username}/updateUserPassword', [
        'as'   => '{username}',
        'uses' => 'ProfilesController@updateUserPassword',
    ]);
    Route::delete('profile/{username}/deleteUserAccount', [
        'as'   => '{username}',
        'uses' => 'ProfilesController@deleteUserAccount',
    ]);

    // Route to show user avatar
    Route::get('images/profile/{id}/avatar/{image}', [
        'uses' => 'ProfilesController@userProfileAvatar',
    ]);

    // Route to upload user avatar.
    Route::post('avatar/upload', ['as' => 'avatar.upload', 'uses' => 'ProfilesController@upload']);
});

// Registered, activated, and is admin routes.
Route::group(['middleware' => ['auth', 'activated', 'role:admin', 'activity', 'twostep', 'checkblocked']], function () {


    Route::resource('/users/deleted', 'SoftDeletesController', [
        'only' => [
            'index', 'show', 'update', 'destroy',
        ],


    ]);

    // Shipping Routes

    Route::get('Monthly-shipping-schedule', 'ShippingController@MonthlyShippingSchedule')->name('shipping.monthlyShipping');
    Route::get('Vessel-Berthing-Application', 'ShippingController@VesselBreathingApp')->name('vessel.breathing');
    Route::get('Status-Change-Request', 'ShippingController@StatusChangeRequest')->name('Status-Change-Request');
    Route::get('Discharge-Change-Request', 'ShippingController@DischargeChangeRequest')->name('Discharge-Change-Request');
    Route::get('Reefer-Unplugging-Request', 'ShippingController@ReeferUnpluggingRequest')->name('Reefer-Unplugging-Request');
    Route::get('On-Carrier-Change', 'ShippingController@OnCarrierChange')->name('On-Carrier-Change');




    Route::post('Monthly-shipping-schedule', 'ShippingController@MonthlyShippingScheduleStore')->name('shipping.store');
    Route::post('Monthly-shipping-schedule-final', 'ShippingController@MonthlyShippingScheduleStoreEmail')->name('shipping.store-final');
    Route::post('StatusChangeRequestPost', 'ShippingController@StatusChangeRequestPost')->name('shipping.request-change');
    Route::post('ChangeRequestEmail', 'ShippingController@ChangeRequestEmail')->name('statusChangeRequest');
    Route::post('Discharge-Change-Request', 'ShippingController@DischargePost')->name('shipping.discharge-change');
    Route::post('DischargeAjax', 'ShippingController@DischargeAjax')->name('DischargeAjax');
    Route::post('UnpluggingAjax', 'ShippingController@UnpluggingAjax')->name('UnpluggingAjax');
    Route::post('carrierAjax', 'ShippingController@carrierAjax')->name('carrierAjax');

    Route::post('Reefer-Unplugging-Request', 'ShippingController@ReeferUnpluggingRequestPost')->name('shipping.unplugging-change');
    Route::post('On-Carrier-Change', 'ShippingController@OnCarrierChangePost')->name('shipping.carrier-change');

    Route::resource('users', 'UsersManagementController', [
        'names' => [
            'index'   => 'users',
            'destroy' => 'user.destroy',
        ],
        'except' => [
            'deleted',
        ],
    ]);
    Route::post('search-users', 'UsersManagementController@search')->name('search-users');

    Route::resource('themes', 'ThemesManagementController', [
        'names' => [
            'index'   => 'themes',
            'destroy' => 'themes.destroy',
        ],
    ]);

    Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
    Route::get('routes', 'AdminDetailsController@listRoutes');
    Route::get('active-users', 'AdminDetailsController@activeUsers');
});

Route::redirect('/php', '/phpinfo', 301);
