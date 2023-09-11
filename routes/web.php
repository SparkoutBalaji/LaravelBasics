<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\UserController;
use App\Http\Controllers\htmlform;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route
Route::get('/', function(){
    return view('home');
});



//Parameter Route                           use with -      //http://127.0.0.1:8000/bio/1111/BALAJI N
Route::get('bio/{id}/{name}',function(int $id,string $name)
{
    return "Id : $id <br/>Name : $name";
});

//Named Parameter                                                   //http://127.0.0.1:8000/name this url redirect to this route
Route::get('/b /23uu43/b4ku3h/b437283998765/54255 /65332', function()
{
    return "Named Parameter is returned.!";
})->name('name');
Route::get('/name', function(){
    return redirect()->route('name');
});

//Group parameter with prefix               //http://127.0.0.1:8000/admin then after use /name or /id or /bio
Route::prefix('admin')->group(function(){
    Route::get('name', function()
    {
        return 'Name : Balaji N';
    });
    Route::get('id', function()
    {
        return 'Id : 1007';
    });
    Route::get('bio', function()
    {
        return 'Name : Balaji N<br/>Id : 1007';
    });
});

//Url pass the data to a parameter - view                                               //this url pass the data to a view by http://127.0.0.1:8000/profile/BALAJI N/23/balaji.n@sparkouttech.com/unmarried-single

$user = [
    'Name'          =>      'BALAJI N',
    'Age'           =>      23,
    'Email'         =>      'balaji.n@sparkouttech.com',
    'Status'        =>      'unmarried-single'
];

Route::get('/profile/{Name}/{Age}/{Email}/{Status}', function($Name,$Age,$Email,$Status)
{
    return view('profile',['Name'=>$Name,'Age'=>$Age, 'Email'=>$Email,'Status'=>$Status]);
})->name('/profile/{Name}/{Age}/{Email}/{Status}');
                                    //to the about view page
Route::get('about', function()
{
    return view('about');
})->name('about.page');

//controller Route
Route::get('detail',[UserController::class,'detail'])->name('user.detailController'); //route name to a href link value

//Component Route components are used to same function in multiple pages
Route::get('c1', function(){
    return view('c1');
})->name('c1.view');

Route::get('c2', function(){
    return view('c2');
})->name('c2.view');

//HTML Form submit with csrf token
Route::post('/submit',[htmlform::class,'form']);
Route::view("/submit","HTMLForm");

