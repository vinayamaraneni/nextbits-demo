<?php
use Illuminate\Support\Facades\Route;

Route::get('demo', function(){
	echo 'Hello from the Demo package!';
});

Route::get('register', 'Nextbits\Demo\DemoController@register');
Route::get('login', 'Nextbits\Demo\DemoController@login');