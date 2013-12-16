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
        $photos = Cache::remember('photos', 30, function(){
            $photos = file_get_contents('https://api.instagram.com/v1/tags/thesourcedenver/media/recent?client_id=f8968ab4a82445b5b01e990c20d3fa53');
            return json_decode($photos);
        });

        return View::make('index', compact('photos'));
    }
));





Route::get('acorn', array(
    'as' => 'tenant.acorn',
    function(){
        return View::make('layouts.subpage')->nest('content', 'tenants.acorn');
    }
));
Route::get('americanum-provisions', array(
    'as' => 'tenant.american-provisions',
    function(){
        return View::make('layouts.subpage')->nest('content', 'tenants.americanum-provisions');
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
Route::get('caprock', array(
    'as' => 'tenant.caprock',
    function(){
        return View::make('layouts.subpage')->nest('content', 'tenants.caprock');
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
Route::get('meathead', array(
    'as' => 'tenant.meathead',
    function(){
        return View::make('layouts.subpage')->nest('content', 'tenants.meathead');
    }
));
Route::get('mondo', array(
    'as' => 'tenant.mondo-market',
    function(){
        return View::make('layouts.subpage')->nest('content', 'tenants.mondo');
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






Route::group(
    array(
        'prefix' => 'admin'
    ), function(){

        Route::get('/', function(){
            return View::make('admin');
        });

        Route::get('/{month}/{year?}', array(
            'as' => 'admin.month',
            function($month, $year = false){
                $date = new DateTime();

                if(!$year){
                    $year = $date->format('Y');
                }

                return View::make('admin', array(
                    'date' => $date->setDate($year, $month, 01)
                ));
            }
        ));

        Route::post('/', array(
            'as' => 'admin.event.store',
            function(){
                var_dump( Input::all() ); die();
            }
        ));

    }
);