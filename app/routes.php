 <?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function() {
    $ahora =  date("m/d/Y");
	$posts = post::where('fecha', '>=',$ahora)->paginate(10);
	return View::make('index', compact('posts'));
});

Route::get('quienes-somos', function() { 
    return View::make('quienes_somos'); 
});

Route::get('servicios', function() { 
    return View::make('servicios'); 
});

Route::get('eventos', function() { 
    return View::make('eventos'); 
});

Route::get('contactenos', function() { 
    return View::make('contactenos'); 
});

Route::get('formacion', function(){
    $ahora =  date("m/d/Y");
    $posts = post::where('fecha', '>=',$ahora)->paginate(10);
    return View::make('formaciones', compact('posts'));
});

Route::get('formacion/{slug}', ['as' => 'formacion', 'uses' => function ($slug){
    $post = post::where('slug', $slug)->first();
    return View::make('formacion', compact('post'));
}]);


Route::post('contacto','ApiController@enviarCorreo');
