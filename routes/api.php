<?php
Route::post('/checker/login', 'Api\CheckerController@login');
Route::get('/checker/{id}/qr/scanned', 'Api\CheckerController@countQRScanned');

Route::post('/person/scanned/', 'Api\PersonLogController@scanned');
Route::post('/bulk/person/log', 'Api\PersonLogController@addMultiple');

Route::post('/person/id/generate', 'Api\PersonnelController@make');
Route::post('/person/register', 'Api\PersonnelController@register');
Route::post('/person/update/profile', 'Api\PersonnelController@updateProfile');


// Routes for cities and barangays.
Route::get('/province/municipal/{province_code}', 'Api\ProvinceController@municipals');
Route::get('/province/barangay/{province_code}', 'Api\ProvinceController@barangays');

Route::get('/municipal/filter/{name}', 'Api\MunicipalController@filterByName');
Route::get('/municipal/list', 'Api\MunicipalController@list');


Route::get('/notify/people', 'Api\NotifyController@message');
Route::post('/sms/message/done', 'Api\NotifyController@messageDone');



