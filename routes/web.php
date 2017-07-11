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
        

/*        Route::get('login/{provider}', 'Auth\LoginController@redirectToProvider');
        Route::get('login/{provider}/callback', 'Auth\LoginController@handleProviderCallback');*/



        Route::post('/ajaxlogin', 'Auth\LoginController@login')->name('user.ajaxlogin');
        Route::post('/ajaxregister', 'Auth\RegisterController@create')->name('user.ajaxregister');
        Route::post('/logout', 'Auth\LoginController@UserLogout')->name('user.logout');


        Route::group(['namespace' => 'User'], function() 
        {
            Route::get('/', 'UserController@index')->name('user.index');   

            Route::get('/contact', 'ContactController@index')->name('user.contact');   
            Route::post('/addcontactus', 'ContactController@addcontactus')->name('user.addcontactus');

            Route::get('/demo', 'UserController@demo')->name('user.demo');  
            Route::get('/friends', 'UserController@friends')->name('user.friends');   


            Route::get('/cat/{id}', 'UserController@category')->name('user.category');    

            Route::get('/publication/{id}', 'PublicationController@index')->name('user.publication');        
            Route::POST('/addcomment', 'PublicationController@addcomment')->name('user.addcomment');
            Route::get('/signalpubliciation/{id}', 'PublicationController@signal')->name('user.signalpubliciation');   


            Route::get('/upvote/{source}/{id}', 'OpinionController@upvote')->name('user.upvote');   
            Route::get('/downvote/{source}/{id}', 'OpinionController@downvote')->name('user.downvote');   
            Route::get('/deletevotes/{source}/{id}', 'OpinionController@deletevotes')->name('user.deletevotes');   


            Route::get('/profile', 'UserController@profile')->name('user.profile');
            Route::get('/editprofile', function(){ return view('user.editprofile');})->name('user.editprofile'); 
            Route::post('/editprofile/{method}', 'UserController@update')->name('user.updateprofile'); 


            Route::get('/mespublications', function(){ return view('user.mespublications');})->name('user.mespublications'); 
            Route::get('/getpublications', 'PublicationController@getMyPublications')->name('user.getmypublications');
            Route::post('mespublications/changeStatus', 'PublicationController@changeStatus')->name('user.changePublicationStatus');
            Route::post('mespublications/changePrivacy', 'PublicationController@changePrivacy')->name('user.changePublicationPrivacy');
            
            Route::get('/mesamis', 'UserController@myfriends')->name('user.myfriends');

            Route::post('createpost', 'PublicationController@store')->name('user.createPost');
            Route::delete('deletepublication/{id}', 'PublicationController@deletePublication')->name('user.deletepublication');


            Route::get('/addfriend/{calling}/{source}/{id}', 'FriendController@addfriend')->name('user.addfriend');   
            Route::get('/deletefriend/{calling}/{source}/{id}', 'FriendController@deletefriend')->name('user.deletefriend');   
            Route::get('/acceptfriend/{calling}/{source}/{id}', 'FriendController@acceptfriend')->name('user.acceptfriend');   
            Route::get('/cancelfriend/{calling}/{source}/{id}', 'FriendController@cancelfriend')->name('user.cancelfriend');   
            Route::get('/declinefriend/{calling}/{source}/{id}', 'FriendController@declinefriend')->name('user.declinefriend');   

            // Route::get('/friends/{id}', 'FriendController@publications')->name('user.friendspub');   

            Route::get('/users/{id}', 'UserController@userpublications')->name('user.userpublications');   

            Route::get('/user/{id}', 'UserController@user')->name('user.user');  

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