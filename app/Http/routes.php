<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*
 * Route use karanne url path eka hadanna ... neh url eka awama kothantada yannna ona kiyala denna
 * SPRING wala wagema thamai - user/new - new user kenek hadana page ekata yanna
*/

use const App\Http\Controllers\PostContoller;

/*Route::get('/', function () {
    return view('welcome');
});
Route::get('/about',function (){
    return " Hi , About Page" ;
});

Route::get('/contact',function (){
    return " Hi, Contact Page";
});

/*Required Parameters*/

/*Route::get('/post/{id}/{name}',function ($id,$name){
return "This is post number  ".$id." " .$name;
});

/*Optional Parameters*/

/*Route::get('user/{name?}', function ($name = null) {
    return $name;
});*/

/*Named Routes*/
/*Route::get('admin/posts/example',array('as'=>'admin.posts',function(){
    $url = route('admin.posts');

     //<a href="route('admin.posts')">CLICK HERE</a>
    return "This url is " .$url;
}));


Route::match(['get', 'post'], '/', function () {
    //
});

Route::any('foo', function () {
    //
});*/



/* USING  CONTROLLERS */

/*Controller eke thiyena method mehema call karannath puluwan*/

/*Route::get('/post','PostContoller@index');*/


/*Resource method okkoma mehema call karanna puluwan*/
/*Route::get('/posts','PostContoller@create');*/

/*Data pasrsing to controller*/
/*Route::get('/posts/{id}','PostContoller@index');*/

/*Resources with Controller*/
Route::resource('/posts','PostContoller');


/*VIEWS & Custome Method*/

/*cutome method*/
Route::get('/contact','PostContoller@contact');

/*passing single data to view*/
Route::get('post/{id}','PostContoller@show_post');

/*passing single data to view*/
Route::get('post/{id}/{name}/{password}','PostContoller@show_post');


/*
|--------------------------------------------------------------------------
| MY STUDY AREA
|--------------------------------------------------------------------------
*/
/*
 * /index kiyala awath welcome page ekata yanna
 * */
/*Route::get('/index', function () {
    return view('welcome');
});*/

/*
 * /home kiyala awath Hi Eshan kiyana eka return karanna
 * */
/*Route::get('/home', function () {
    return " Hi , Eshan";
});*/

/*Route::get('/admin/dashboard', function () {
    return " Admin Area - Dashboard !";
});*/

/*
|--------------------------------------------------------------------------
| MY STUDY AREA - END
|--------------------------------------------------------------------------
*/

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
