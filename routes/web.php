<?php

use Illuminate\Support\Facades\Route;



Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');


// Frontend Area----------->

Route::get('/','frontend\FrontendController@home');
Route::get('About-Us','frontend\FrontendController@aboutus');
Route::get('Why_Chosse_Us','frontend\FrontendController@whychosseus');
Route::get('Team-Member','frontend\FrontendController@teammember');
Route::get('Courses','frontend\FrontendController@course');
Route::get('Course-details/{id}/{course_name}','frontend\FrontendController@coursedetails');
Route::get('Services/{id}','frontend\FrontendController@services');
Route::get('Software/{id}','frontend\FrontendController@software');
Route::get('Contact-Us','frontend\FrontendController@contactus');
Route::post('user-message','frontend\FrontendController@usermessage');





// Backend Area----------->

Route::get('/backend', function () {
    return view('backend.home');
});


// User--->

Route::get('Create-Admin','backend\UserController@createadmin');
Route::post('usercreate','backend\UserController@usercreate');
Route::get('Manage-Admin','backend\UserController@manageadmin');
Route::get('inactiveadmin/{id}','backend\UserController@inactiveadmin');
Route::get('activeadmin/{id}','backend\UserController@activeadmin');
Route::get('deleteadmin/{id}','backend\UserController@deleteadmin');
Route::get('editadmin/{id}','backend\UserController@editadmin');
Route::post('updateadmin/{id}','backend\UserController@updateadmin');
Route::get('User-Message','backend\UserController@usermessage');

// Slider--->

Route::get('Slider','backend\SliderController@slider');
Route::post('sliderinsert','backend\SliderController@sliderinsert');
Route::get('Manage-Slider','backend\SliderController@manageslider');
Route::get('deleteslider/{id}','backend\SliderController@deleteslider');
Route::get('inactiveslider/{id}','backend\SliderController@inactiveslider');
Route::get('activeslider/{id}','backend\SliderController@activeslider');
Route::get('editslider/{id}','backend\SliderController@editslider');
Route::post('sliderupdate/{id}','backend\SliderController@sliderupdate');

// About--->

Route::get('About','backend\AboutController@about');
Route::post('aboutupdate/{id}','backend\AboutController@aboutupdate');

// Services--->

Route::get('Services','backend\ServicesController@services');
Route::post('servicesinsert','backend\ServicesController@servicesinsert');
Route::get('Manage-Services','backend\ServicesController@manageservices');
Route::get('deleteServices/{id}','backend\ServicesController@deleteServices');
Route::get('inactiveServices/{id}','backend\ServicesController@inactiveServices');
Route::get('activeServices/{id}','backend\ServicesController@activeServices');
Route::get('editServices/{id}','backend\ServicesController@editServices');
Route::post('servicesupdate/{id}','backend\ServicesController@servicesupdate');

// Software--->

Route::get('Software','backend\SoftwareController@software');
Route::post('softwareinsert','backend\SoftwareController@softwareinsert');
Route::get('Manage-Software','backend\SoftwareController@managesoftware');
Route::get('inactiveSoftware/{id}','backend\SoftwareController@inactiveSoftware');
Route::get('activeSoftware/{id}','backend\SoftwareController@activeSoftware');
Route::get('deleteSoftware/{id}','backend\SoftwareController@deleteSoftware');
Route::get('editSoftware/{id}','backend\SoftwareController@editSoftware');
Route::post('softwareupdate/{id}','backend\SoftwareController@softwareupdate');

// Clients--->

Route::get('Clients','backend\ClientController@clients');
Route::post('Clientsinsert','backend\ClientController@clientsinsert');
Route::get('Manage-Clients','backend\ClientController@manageclients');
Route::get('deleteClients/{id}','backend\ClientController@deleteClients');
Route::get('editClients/{id}','backend\ClientController@editClients');
Route::post('clientsupdate/{id}','backend\ClientController@clientsupdate');

// Course--->

Route::get('Course','backend\CourseController@course');
Route::post('courseinsert','backend\CourseController@courseinsert');
Route::get('Manage-Course','backend\CourseController@managecourse');
Route::get('inactiveCourse/{id}','backend\CourseController@inactiveCourse');
Route::get('activeCourse/{id}','backend\CourseController@activeCourse');
Route::get('deleteCourse/{id}','backend\CourseController@deleteCourse');
Route::get('editCourse/{id}','backend\CourseController@editCourse');
Route::post('courseupdate/{id}','backend\CourseController@courseupdate');

// Team--->

Route::get('Team','backend\TeamController@team');
Route::post('teaminsert','backend\TeamController@teaminsert');
Route::get('Manage-Team','backend\TeamController@manageteam');
Route::get('deleteTeam/{id}','backend\TeamController@deleteTeam');
Route::get('editTeam/{id}','backend\TeamController@editTeam');
Route::post('teamupdate/{id}','backend\TeamController@teamupdate');

// Website Settings--->

Route::get('Settings','backend\WebsiteSettingsController@Settings');
Route::post('updatesettings/{id}','backend\WebsiteSettingsController@updatesettings');
Route::get('Contact','backend\WebsiteSettingsController@Contact');
Route::post('contactupdate/{id}','backend\WebsiteSettingsController@contactupdate');
Route::get('Why-Chosse-Us','backend\WebsiteSettingsController@whychosseus');
Route::post('whychosseusupdate/{id}','backend\WebsiteSettingsController@whychosseusupdate');


