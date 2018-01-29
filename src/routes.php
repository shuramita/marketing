<?php

Route::group(['namespace' => 'Shuramita\Property\Controllers'], function()
{
    Route::get('property/test',['as' =>'shura_property_test','uses'=>function(){
        return 'working';
    }] );
});

