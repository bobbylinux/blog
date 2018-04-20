<?php
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

/*Route::get('/', function () {
    return view('welcome', [
        'name' => 'World'
    ]);
});*/
/*Route::get('/', function () {
    return view('welcome')->with('name', 'world');
});*/
/*Route::get('/', function () {
    $name = "World";
    $age = 31;
    return view('welcome', compact('name','age'));
});*/

/*Route::get('/tasks', 'TasksController@index');

Route::get('/tasks/{task}', 'TasksController@show');

Route::get('/tasks/{task}', 'TasksController@show');*/

/*Route::get('/tasks', function () {

    $tasks = Task::all();

    return view('tasks.index', compact('tasks'));
});

Route::get('/tasks/{task}', function ($id) {

    $task = Task::find($id);

    return view('tasks.show', compact('task'));
});*/



/*Route::get('/about', function(){
    return view('about');
});*/

//$stripe = App::make('App\Billing\Stripe');
//$stripe = resolve('App\Billing\Stripe');

Route::get('/', 'PostsController@index')->name('home');
Route::get('/posts/create', 'PostsController@create');
Route::post('/posts', 'PostsController@store');
Route::get('/posts/{post}', 'PostsController@show');
Route::post('/posts/{post}/comments', 'CommentsController@store');

//Route::get('posts/tags/{tag}', 'PostController@indexByTags');
//Route::get('posts/tags/{tag}', 'PostsController@index');
Route::get('posts/tags/{tag}', 'TagsController@index');

/*Route::get('/register', 'AuthController@register');
Route::get('/login', 'AuthController@login');*/
//this is facade
Route::get('/register', 'RegistrationController@create');
Route::post('/register', 'RegistrationController@store');
Route::get('/login', 'SessionsController@create')->name('login');
Route::post('/login', 'SessionsController@store');
Route::get('/logout', 'SessionsController@destroy')->name('logout');