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
        */
        Auth::routes();
        




        Route::post('/ajaxlogin', 'Auth\LoginController@login')->name('user.ajaxlogin');
        Route::post('/ajaxregister', 'Auth\RegisterController@create')->name('user.ajaxregister');
        Route::post('/logout', 'Auth\LoginController@UserLogout')->name('user.logout');


        Route::group(['namespace' => 'User'], function() 
        {
            Route::get('/profile', 'UserController@profile')->name('user.profile');
            Route::get('/', 'UserController@index')->name('user.index');        
        });


        
        
        Route::get('/setlocale/{locale}', function ($locale) {
        if (in_array($locale, \Config::get('app.locales'))) {
            Session::put('locale', $locale);
          }
          return redirect()->back();

        });


Route::group(['prefix' => 'bo'  ], function() 
{
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');

    Route::post('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
});

Route::group(['prefix' => 'bo' , 'namespace' => 'Admin'], function() 
{

    Route::get('/', 'DashboardController@index')->name('admin.dashboard');
    Route::get('/dashboard', 'DashboardController@index')->name('admin.dashboard');





    Route::resource('admins', 'AdminsController' ,  ['names' => ['index' => 'admin.admins']]);
    Route::get('/getadmins', 'AdminsController@getAdmins')->name('admin.getadmins');
    Route::post('admins/changeStatus', 'AdminsController@changeStatus')->name('admin.changeAdminstatus');

    
    Route::resource('users', 'UsersController' ,  ['names' => ['index' => 'admin.users']]);
    Route::get('/getusers', 'UsersController@getUsers')->name('admin.getusers');
    Route::post('users/changeStatus', 'UsersController@changeStatus')->name('admin.changeUserStatus');


    Route::resource('trophies', 'TrophiesController' ,  ['names' => ['index' => 'admin.trophies']]);
    Route::get('/gettrophies', 'TrophiesController@getTrophies')->name('admin.gettrophies');


    Route::resource('categories', 'CategoriesController' ,  ['names' => ['index' => 'admin.categories']]);
    Route::get('/getcategories', 'CategoriesController@getCategories')->name('admin.getcategories');


    Route::resource('contactus', 'ContactusController' ,  ['names' => ['index' => 'admin.contactus']]);
    Route::get('/getcontactus', 'ContactusController@getContactus')->name('admin.getcontactus');


    Route::resource('publications', 'PublicationsController',  ['names' => ['index' => 'admin.publications']]);
    Route::get('/getpublications', 'PublicationsController@getPublications')->name('admin.getpublications');
    Route::post('publications/changeStatus', 'PublicationsController@changeStatus')->name('admin.changePublicationStatus');


    Route::resource('comments', 'CommentsController');
    Route::get('/getcomments/{id}', 'CommentsController@getcomments')->name('admin.getcomments');
    Route::post('comments/changeStatus', 'CommentsController@changeStatus')->name('admin.changeCommentStatus');


  
});