<?php

use App\Country;

Route::get('locale/{locale}', function ($locale) {
    \Session::put('locale', $locale);
    return redirect()->back();
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
	$country = Country::first();
	//dd($country);
    return view('test',compact('country',$country));
});

Route::get('/welcome/{locale}', function($locale) {
	App::setLocale($locale);
	return view('welcome');
});

Route::get('create', function() {
    $country = new Country();

    $country->code= "EU";
    $country->save();

    foreach (['en', 'ru'] as $locale) {
        $country->translateOrNew($locale)->name = "Title {$locale}";
    }

    $country->save();

    echo 'Created an country with some translations!';
});




