<?php
/**
 * Created by PhpStorm.
 * User: bhps690
 * Date: 3/22/2019
 * Time: 5:32 PM
 */
Route::get('/getMailsds/{id}','ViewMyMail\GetMyMail\MailsController@retrieveMails');
Route::get('/getMail/{id}','ViewMyMail\GetMyMail\mailSearchController@getMail');
Route::get('/createDB','ViewMyMail\GetMyMail\InsertUserController@createSchema');
Route::get('/insertUsers','ViewMyMail\GetMyMail\InsertUserController@insertClient');
Route::get('/insertUser',function(){

    return redirect('/insertUsers');
});
