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
        return View::make('index');
    }
));

// Route::get('about', array(
//     'as' => 'about',
//     function()
//     {
//         return View::make('index');
//     }
// ));

// Route::get('contact', array(
//     'as' => 'contact',
//     function()
//     {
//         return View::make('index');
//     }
// ));

// Route::get('faq', array(
//     'as' => 'faq',
//     function()
//     {
//         return View::make('index');
//     }
// ));

// Route::get('social', array(
//     'as' => 'social',
//     function()
//     {
//         return View::make('index');
//     }
// ));

// Route::group(
//     array(
//         'prefix' => 'tenants',
//     ),
//     function(){

//         Route::get('/', array(
//             'as' => 'tenants.index',
//             function()
//             {
//                 return View::make('index');
//             }
//         ));

//         Route::get('acorn', array(
//             'as' => 'acorn',
//             function()
//             {
//                 return View::make('acorn');
//             }
//         ));

//         Route::get('comida', array(
//             'as' => 'comida',
//             function()
//             {
//                 return View::make('comida');
//             }
//         ));

//         Route::get('boxcar-coffee', array(
//             'as' => 'boxcar-coffee',
//             function()
//             {
//                 return View::make('boxcar-coffee');
//             }
//         ));

//         Route::get('proper-pour', array(
//             'as' => 'proper-pour',
//             function()
//             {
//                 return View::make('proper-pour');
//             }
//         ));

//         Route::get('svper-ordinary-gallery', array(
//             'as' => 'svper-ordinary-gallery',
//             function()
//             {
//                 return View::make('svper-ordinary-gallery');
//             }
//         ));

//         Route::get('crooked-stave', array(
//             'as' => 'crooked-stave',
//             function()
//             {
//                 return View::make('crooked-stave');
//             }
//         ));

//         Route::get('collegiate-peaks-bank', array(
//             'as' => 'collegiate-peaks-bank',
//             function()
//             {
//                 return View::make('collegiate-peaks-bank');
//             }
//         ));

//         Route::get('babettes', array(
//             'as' => 'babettes',
//             function()
//             {
//                 return View::make('babettes');
//             }
//         ));

//         Route::get('meat-head', array(
//             'as' => 'meat-head',
//             function()
//             {
//                 return View::make('meat-head');
//             }
//         ));

//         Route::get('americanum-provisions', array(
//             'as' => 'americanum-provisions',
//             function()
//             {
//                 return View::make('americanum-provisions');
//             }
//         ));

//         Route::get('beet-and-yarrow', array(
//             'as' => 'beet-and-yarrow',
//             function()
//             {
//                 return View::make('beet-and-yarrow');
//             }
//         ));

//         Route::get('caprock-farm-bar', array(
//             'as' => 'caprock-farm-bar',
//             function()
//             {
//                 return View::make('caprock-farm-bar');
//             }
//         ));

//         Route::get('office-wing', array(
//             'as' => 'office-wing',
//             function()
//             {
//                 return View::make('office-wing');
//             }
//         ));

//     }
// );