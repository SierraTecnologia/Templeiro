<?php

Route::group(
    ['middleware' => ['web']], function () {

        Route::prefix('templeiro')->group(
            function () {
                Route::group(
                    ['as' => 'templeiro.'], function () {


                        // Route::get('public-preview/{encFileName}', 'AssetController@asPreview')->name('index');
                        // Route::get('public-asset/{encFileName}', 'AssetController@asPublic')->name('index');
                        // Route::get('public-download/{encFileName}/{encRealFileName}', 'AssetController@asDownload')->name('index');
                        Route::get('asset/{path}/{contentType}', 'AssetController@asset')->name('asset');



                        // Route::resource('projects', 'ProjectController');
                        // /**
                        //  * 
                        //  */
                        // Route::get('home', 'HomeController@index')->name('home');
                        // Route::get('persons', 'HomeController@persons')->name('persons');

                        // /**
                        //  * Track
                        //  */
                        // Route::prefix('track')->group(
                        //     function () {
                        //         Route::namespace('Track')->group(
                        //             function () {
                        //                 Route::group(
                        //                     ['as' => 'track.'], function () {

                        //                         Route::get('person', 'PersonController@index')->name('person');

                        //                     }
                        //                 );
                        //             }
                        //         );
                        //     }
                        // );


                    }
                );
            }
        );

    }
);