<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', array(
    'as' => 'home',
    function()
    {
        $events = CalendarEvent::current()
            ->limit(7)
            ->orderBy('starts_at', 'asc')
            ->get();
        return View::make('index', compact('photos', 'events'));
    }
));




View::composer('layouts.site', function($view){
    $photos = Cache::remember('photos', 30, function(){
        // $photos = file_get_contents('https://api.instagram.com/v1/tags/thesourcedenver/media/recent?client_id=f8968ab4a82445b5b01e990c20d3fa53');
        $token = '528297183.f8968ab.b2b945086da84579aef467effbcab3c8';
        // $photos = file_get_contents('https://api.instagram.com/v1/users/self/feed?access_token=' . $token . '&count=8');
        $photos = file_get_contents('https://api.instagram.com/v1/users/self/media/recent?access_token=' . $token . '&count=8');
        return json_decode($photos);
    });

    $view->with('photos', $photos);
});



Route::get('acorn', array(
    'as' => 'tenant.acorn',
    function(){
        return View::make('layouts.subpage')->nest('content', 'tenants.acorn');
    }
));
Route::get('babettes', array(
    'as' => 'tenant.babettes',
    function(){
        return View::make('layouts.subpage')->nest('content', 'tenants.babettes');
    }
));
Route::get('beet-&-yarrow', array(
    'as' => 'tenant.beet-yarrow',
    function(){
        return View::make('layouts.subpage')->nest('content', 'tenants.beet-yarrow');
    }
));
Route::get('boxcar', array(
    'as' => 'tenant.boxcar',
    function(){
        return View::make('layouts.subpage')->nest('content', 'tenants.boxcar');
    }
));
Route::get('collegiate-peaks', array(
    'as' => 'tenant.collegiate-peaks-bank',
    function(){
        return View::make('layouts.subpage')->nest('content', 'tenants.collegiate-peaks');
    }
));
Route::get('comida', array(
    'as' => 'tenant.comida',
    function(){
        return View::make('layouts.subpage')->nest('content', 'tenants.comida');
    }
));
Route::get('crooked-stave', array(
    'as' => 'tenant.crooked-stave',
    function(){
        return View::make('layouts.subpage')->nest('content', 'tenants.crooked-stave');
    }
));
Route::get('heroes-like-us', array(
    'as' => 'tenant.heroes',
    function(){
        return View::make('layouts.subpage')->nest('content', 'tenants.heroes');
    }
));
Route::get('jennifer-olson-photography', array(
    'as' => 'tenant.jennifer-olson',
    function(){
        return View::make('layouts.subpage')->nest('content', 'tenants.jennifer-olson');
    }
));
Route::get('mondo', array(
    'as' => 'tenant.mondo-market',
    function(){
        return View::make('layouts.subpage')->nest('content', 'tenants.mondo');
    }
));
Route::get('slow-food-denver', array(
    'as' => 'tenant.slow-food',
    function(){
        return View::make('layouts.subpage')->nest('content', 'tenants.slow-food');
    }
));
Route::get('proper-pour', array(
    'as' => 'tenant.proper-pour',
    function(){
        return View::make('layouts.subpage')->nest('content', 'tenants.proper-pour');
    }
));
Route::get('svper-ordinary', array(
    'as' => 'tenant.svperordinary',
    function(){
        return View::make('layouts.subpage')->nest('content', 'tenants.svper-ordinary');
    }
));
Route::get('wunder-werks', array(
    'as' => 'tenant.wunder-werks',
    function(){
        return View::make('layouts.subpage')->nest('content', 'tenants.wunder-werks');
    }
));





Route::get('sitemap', function(){
    $sitemap = App::make('sitemap');

    $lastUpdated = '2013-12-01';

    $sitemap->add( route('home'), $lastUpdated, '1.0', 'daily' );
    $sitemap->add( route('tenant.acorn'), $lastUpdated, '0.5', 'monthly' );
    $sitemap->add( route('tenant.american-provisions'), $lastUpdated, '0.5', 'monthly' );
    $sitemap->add( route('tenant.babettes'), $lastUpdated, '0.5', 'monthly' );
    $sitemap->add( route('tenant.beet-yarrow'), $lastUpdated, '0.5', 'monthly' );
    $sitemap->add( route('tenant.boxcar'), $lastUpdated, '0.5', 'monthly' );
    $sitemap->add( route('tenant.caprock'), $lastUpdated, '0.5', 'monthly' );
    $sitemap->add( route('tenant.collegiate-peaks-bank'), $lastUpdated, '0.5', 'monthly' );
    $sitemap->add( route('tenant.comida'), $lastUpdated, '0.5', 'monthly' );
    $sitemap->add( route('tenant.crooked-stave'), $lastUpdated, '0.5', 'monthly' );
    $sitemap->add( route('tenant.meathead'), $lastUpdated, '0.5', 'monthly' );
    $sitemap->add( route('tenant.mondo-market'), $lastUpdated, '0.5', 'monthly' );
    $sitemap->add( route('tenant.proper-pour'), $lastUpdated, '0.5', 'monthly' );
    $sitemap->add( route('tenant.svperordinary'), $lastUpdated, '0.5', 'monthly' );

    return $sitemap->render('xml');
});




Route::get('login', array(
    'as' => 'login',
    function(){
        return View::make('session.login');
    }
));

Route::get('logout', function(){
    Auth::logout();
    return Redirect::route('login');
});

Route::post('login', function(){
    if(Auth::attempt(array('username' => Input::get('username'), 'password' => Input::get('password') )))
    {
        return Redirect::intended('admin');
    }
    else
    {
        return Redirect::route('login')->with('message', 'username or password does not match');
    }
});




Route::group(
    array(
        'before' => 'auth',
        'prefix' => 'admin'
    ), function(){

        Route::resource('events', 'CalendarEventsController');

        Route::get('/', 'CalendarEventsController@index');

        Route::get('/{month}/{year?}', array(
            'as' => 'admin.month',
            function($month, $year = false){
                $events = CalendarEvent::all();

                $date = new DateTime();

                if(!$year){
                    $year = $date->format('Y');
                }

                return View::make('admin', array(
                    'date'   => $date->setDate($year, $month, 01),
                    'events' => $events
                ));
            }
        ));
        
    }
);