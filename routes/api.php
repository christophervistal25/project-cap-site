<?php
Route::post('/checker/login', 'Api\CheckerController@login');
Route::get('/checker/{id}/qr/scanned', 'Api\CheckerController@countQRScanned');
Route::post('/person/scanned/', 'Api\PersonLogController@scanned');
Route::post('/bulk/person/log', 'Api\PersonLogController@addMultiple');

