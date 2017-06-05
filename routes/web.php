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
        
        
        
        Route::get('/', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
        
        Route::get('/setlocale/{locale}', function ($locale) {
        if (in_array($locale, \Config::get('app.locales'))) {
            Session::put('locale', $locale);
          }
          return redirect()->back();

        });
            
        
/*                Route::get('setlocale/{locale}', function ($locale) {
          if (in_array($locale, \Config::get('app.locales'))) {
            Session::put('locale', $locale);
          }
          return redirect()->back();
        });
        */

        
        Route::prefix('admin')->group(function() {
        Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
        Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
        
        Route::group(['namespace' => 'Admin'], function () {
        Route::get('/', 'DashboardController@index')->name('admin.dashboard');
        Route::get('/dashboard', 'DashboardController@index')->name('admin.dashboard');
        Route::get('/blank', 'BlankController@index')->name('admin.blank');
        Route::get('/users', 'BlankController@index')->name('admin.users');
        Route::get('/publications', 'BlankController@index')->name('admin.publications');
        Route::get('/categories', 'BlankController@index')->name('admin.categories');
        Route::get('/trophies', 'BlankController@index')->name('admin.trophies');
        Route::get('/contact', 'BlankController@index')->name('admin.contact');

        Route::get('/contact', 'BlankController@index')->name('admin.contact');

        Route::get('/contact', 'BlankController@index')->name('admin.contact');
        

        Route::resource('admins', 'AdminsController');
        Route::get('/getadmins', 'AdminsController@getAdmins')->name('admin.getadmins');
        Route::post('admins/changeStatus', array('as' => 'changeStatus', 'uses' => 'AdminsController@changeStatus'));
        
        

        Route::resource('users', 'UsersController');
        Route::get('/getusers', 'UsersController@getUsers')->name('admin.getusers');
        Route::post('users/changeStatus', array('as' => 'changeStatus', 'uses' => 'UsersController@changeStatus'));


        Route::resource('trophies', 'TrophiesController');
        Route::get('/gettrophies', 'TrophiesController@getTrophies')->name('admin.gettrophies');

        Route::resource('categories', 'CategoriesController');
        Route::get('/getcategories', 'CategoriesController@getCategories')->name('admin.getcategories');


        Route::resource('contactus', 'ContactusController');
        Route::get('/getcontactus', 'CategoriesController@getContactus')->name('admin.getcontactus');






        });
        
        
        
        });
