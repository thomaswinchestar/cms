<?php

use Illuminate\Support\Facades\Route;
use App\Post;
use App\User;
use App\Role;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});
//
//Route::get('/about', function () {
//    return "about is here";
//});
//
//Route::get('/contact', function () {
//    return "contact is here";
//});
//
//Route::get('/post/{id}/{name}', function($id, $name){
//   return "the post is {$id} and the name is {$name}.";
//});
//
//Route::get('/admin/posts/example', array('as' => 'admin.home', function(){
//    $url = route('admin.home');
//    return "this url is $url. ";
//}));


//Route::get('/post/{id}', 'PostsController@index');

//Route::resource('posts', 'PostsController');
//Route::get('/contact', 'PostsController@contact');
//
//Route::get('post/{id}/{name}/{password}', 'PostsController@show_post');
//
//Route::get('/', function ()
//{
//    return view('greeting', ['name' => 'Devpph']);
//});

//Database Raw SQL Queries
//Route::get('/insert', function (){
//    DB::insert('insert into posts(title, content) values(?, ?)', ['Laravel is awesome with devpph', 'Laravel is the best thing that has happened to PHP']);
//});
//Route::get('/read', function (){
//    $results = DB::select('select * from posts where id= ?', [6]);
////    return var_dump($results);
//    foreach($results as $post){
//        return $post->title;
//    }
//});
//
//Route::get('/update', function (){
//    $updated = DB::update('update posts set title = "Updated title" where id = ?', [6]);
//    return $updated;
//});
//
//Route::get('/delete', function(){
//    $deleted = DB::delete('delete from posts where id = :id', ['id' => 11]);
//    return $deleted;
//});

//Eloquent ORM

//Route::get('/read', function (){
//    $posts = Post::all();
//    foreach($posts as $post){
//        return $post->title;
//    }
//});

//Route::get('/find', function (){
//    $post = Post::find(7);
//    return $post->title;
//});

//Route::get('/findwhere', function (){
//    $posts = Post::where('id', 8)->orderBy('id', 'desc')->take(1)->get();
//    return $posts;
//});

//Route::get('/findmore', function (){
////    $posts = Post::findOrFail(1);
////    return $posts;
//    $posts = Post::where('users_count','<', 50)->firstOrFail();
//
//});

//Route::get('/basicinsert', function (){
//    $post = new Post;
//    $post->title = 'new Eloquent title insert';
//    $post->content = 'Wow Eloquent is really cool, look at this contetn';
//    $post->save();
//});

//Route::get('/basicinsert7', function (){
//    $post = Post::find(7);
//    $post->title = 'new Eloquent title insert 2';
//    $post->content = 'Wow Eloquent is really cool, look at this content 2';
//    $post->save();
//});

//Route::get('/create',function (){
//   Post::create(['title'=>'the create method 2', 'content'=>'Wow I am learning a lot with Edwin Diaz 2']);
//});

//Route::get('/update', function (){
//    Post::where('id', 7)->where('is_admin', 0)->update(['title'=>'New PHP Title','content'=>'I love my instructor edwin']);
//});

//Route::get('/delete', function (){
//   $post = Post::find(3);
//   $post->delete();
//});

//Route::get('/delete2', function (){
//    Post::destroy([9,10]);
////    Post::where('is_admin', 0)->delete();
//});

//Route::get('/softdelete', function (){
//    Post::find(2)->delete();
//});
//
//Route::get('/readsoftdelete', function (){
////    $post = Post::find(1);
////    return $post;
//    $post = Post::withTrashed()->where('is_admin', 0)->get();
//    return $post;
////    $post = Post::onlyTrashed()->where('is_admin', 0)->get();
////    return $post;
//});

//Route::get('/restore', function (){
//    Post::withTrashed()->where('is_admin', 0)->restore();
//
//});

//Route::get('/forcedelete', function (){
//    Post::onlyTrashed()->where('is_admin', 0)->forceDelete();
//});

/*
|--------------------------------------------------------------------------
| ELOQUENT RELATIONSHIPS
|--------------------------------------------------------------------------
*/

// One to One relationship
// Route::get('/user/{id}/post', function ($id){
//     return User::find($id)->post->content;
// });

//inverse relationship
// Route::get('/post/{id}/user', function($id){
//     return Post::find($id)->user->name;
// });

//One to Many Relationship
// Route::get('/posts', function(){
//     $user = User::find(1);
//     foreach($user->posts as $post){
//         echo $post->title . "<br>";
//     }
// });

//Many to Many Relationship

//Route::get('/user/{id}/role', function($id){
//
//    $user = User::find($id)->roles()->orderBy('id', 'desc')->get();
//
//    return $user;

    // foreach($user->roles as $role){
    //     return $role->name;
    // }

//});

//Accessing the intermediate table / pivot

Route::get('user/pivot', function(){
    
    $user = User::find(1);

    foreach($user->roles as $role){
        return $role->pivot->created_at;
    }

});
