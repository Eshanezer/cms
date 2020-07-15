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
use App\Post;
use App\User;
use App\Country;

Route::get('/', function () {
    return view('welcome');
});
/*Route::get('/about',function (){
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
Route::resource('/posts', 'PostContoller');


/*VIEWS & Custome Method*/

/*cutome method*/
Route::get('/contact', 'PostContoller@contact');

/*passing single data to view*/
Route::get('post/{id}', 'PostContoller@show_post');

/*passing single data to view*/
Route::get('post/{id}/{name}/{password}', 'PostContoller@show_post');


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
| Application Routes -SQL
|--------------------------------------------------------------------------
*/

/*Route::get('/insert', function () {
    DB::insert('insert into posts (id,title, content) values (?, ?,?)', [1, 'PHP LARAVEL',"Laravel is the best"]);
});*/

/*Route::get('/select ', function () {
   $result = DB::select('select * from posts where id = ?', [1]);

  // return var_dump($result);

   //return $result;

   //foreach ($result as $post){
     //  return $post ->title;
   //
});*/

/*Route::get('/update', function () {

    $update = DB::update('update posts set title =" Laravel Updated" where id = ?', [1]);

    return 'Object '.$update.'Úpdated !';

});*/

/*Route::get('/delete', function () {
    DB::delete('delete from posts where id = ?', ['1']);
});*/

/*
|--------------------------------------------------------------------------
| Eloquent - ORM - MODEL
|-------------------------------------------------------------------------
*/

// find all data
/*Route::get('/find', function () {
   $posts = Post::all();
   foreach ($posts as $post){
       return $post->title;
   }
});*/

// find 1 data
/*Route::get('/find', function () {
    $posts = Post::find(1)->get();
    foreach ($posts as $post){
        return
            $post->title .' - '.$post->content;
    }
});*/

//Constraints
/*Route::get('/find', function () {
    $post =Post::where('id',1)->orderBy('id','asc')->take(1)->get();

    foreach ($post as $post1){
        return $post1->title;
    }
});*/

/*Route::get('/find', function () {
    $post =Post::findOrFail(3);

    return $post;
});*/


/*INSERT */
/*Route::get('/basic-insert', function () {
   $post = new Post;
   $post->title="Eloquent Insert";
   $post->content="Eloquent content";

   $post ->save();
});*/

/*FIND AND UPDATE*/

/*Route::get('/basic-insert', function () {
   $post = Post::find(1);
   $post->title="Eloquent Insert 01";
   $post->content="Eloquent content";

   $post ->save();
});*/

/*MASS*/

/*create*/

/*Route::get('/create-mass', function () {
    //Mass Exception
    Post::create(['title'=>'the mass create','content'=>'Mass Content waorking']);
});*/

/*update*/

/*Route::get('/update-mass', function () {
    Post::where('id',2)->where('is_admin',0)->update(['title'=>'New Php Title','content'=>'I Love Laravel']);
});*/

/*delete*/

/*Route::get('/delete-mass', function () {
    $post = Post::find(3);
    $post->delete();
});*/

/*Route::get('/delete-mass-2', function () {
    //Post::destroy(2);
    //Post::destroy([4,6,5]);
    //Post::where('is_admin',0)->delete();
});*/




/* --------------  SOFT DELETE MODEL ---------------*/




/*Route::get('/soft-delete', function () {
   \App\Post::find(1)->delete();
});*/

/* read soft deleted data*/

/*Route::get('/read-soft-delete', function () {
//  $post = Post::find(1);
//
//  return $post;

//    $post =Post::withTrashed()->where('id',1)->get();
//
//    return $post;

    $post =Post::onlyTrashed()->get();
   return $post;*/
/*});*/

/*restore soft delete*/
/*Route::get('/restore-soft-delete', function () {
    Post::withTrashed()->where('id',1)->restore();
});*/

/*Route::get('/force-delete', function () {
    Post::withTrashed()->where('id',1)->forceDelete();
});*/




/*-----------------      Eloquent Relationship --------------------------*/

/*One - One Relationship */


/*Route::get('/user/{id}/post', function ($id) {
    return User::find($id)->post->title;
});*/

/* ----------Inverse Relation --------------*/

/*Route::get('/post/{id}/user', function ($id) {
    return Post::find($id)->user->name;
});*/


/* One - Many Relationship */

/*Route::get('/user/{id}', function ($id) {
   $user = User::find($id);

   foreach ($user->posts as $post){
       echo $post->title."<br>";
    }
});*/

/* Many to Many */

/*Route::get('/user/{id}/role', function ($id) {
    $user =User::find($id)->roles()->orderBy('id','asc')->get();

    return $user;
});*/

/*accesing the intermidiate tbale / pivot*/

/*Route::get('/user/pivot', function () {
    $user =User::find(1);
    foreach ($user->roles as $role){
        return $role->pivot;
    }
});*/

/* Has many through relation */
/* Related: country model & add_country_id_column migration*/

Route::get('/user/country', function () {
    $county =Country::find(1);

    foreach ($county->posts as $post){
        return $post->title;
    }
});

/*Polymorphic relation  */

Route::get('/poly', function () {
    $user=User::find(1);
    foreach ($user->photos as $photo){
    return $photo;
    }
});

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
