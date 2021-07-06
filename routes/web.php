<?php

use App\Resep;
use App\User;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {

    $reseps = Resep::all();

    return view('welcome', compact('reseps'));
});

Route::get('/welcome/reseps/{resep}', 'ResepsController@welcomeResep');

Route::get('/welcomeKategori', 'ResepsController@welcomeKategori');

// Route::get('/resepKategori', 'ResepsController@resepKategori');

Route::get('/welcomeProfile', 'ResepsController@welcomeProfile');
Route::get('/welcomeAbout', 'ResepsController@welcomeAbout');

// PESAN DARI  CONTACT
Route::get('/pesan', 'PesansController@index');
Route::post('/pesan', 'PesansController@store');



Auth::routes();

Route::get('/home', 'MembersController@index')->name('user');
Route::get('/user', 'MembersController@index')->name('user');

// buat navbar di adm
Route::get('/adm', 'HomeController@index')->name('adm');

Route::get('admin/home', 'HomeController@adminHome')->name('admin.home')->middleware('is_admin');

Route::get('/reseps/admin', 'ResepsController@resepsAdmin');
Route::get('/admin/reseps/{resep}', 'ResepsController@adminDetail');
Route::put('/admin/terima/{resep}', 'ResepsController@terima');
Route::get('/tolak/{resep}', 'ResepsController@tolak');
Route::get('/revisi/{resep}', 'ResepsController@revisi');
Route::get('/admin/destroy/{resep}', 'ResepsController@adminDestroy');


// Kategoris
// Route::resource('kategoris', 'KategorisController');

Route::get('/kategori', 'KategorisController@index');
Route::post('/kategori', 'KategorisController@store');
Route::get('/kategori/create', 'KategorisController@create');

Route::get('/kategori/{kategori}', 'KategorisController@show');
Route::get('/kategori/edit/{kategori}', 'KategorisController@edit');
Route::put('/kategori/update/{kategori}', 'KategorisController@update');
Route::get('/kategori/destroy/{kategori}', 'KategorisController@destroy');


// arsip
Route::get('/admin/arsip/{resep}', 'ResepsController@adminArsip');
Route::get('/arsip', 'ResepsController@arsip');
Route::get('/arsip/destroy/{resep}', 'ResepsController@arsipDestroy');
Route::get('/admin/unarsip/{resep}', 'ResepsController@unarsip');

Route::get('/users', 'UsersController@index');
Route::get('/users/destroy/{user}', 'UsersController@destroy');

// user arsip
Route::get('/arsipUser', 'ResepsController@arsipUserData');



// USER

// relasi
Route::middleware(['auth'])->group(function () {

    Route::get('/reseps', function () {
        $reseps = Resep::with('user')->get();
        return view('reseps.index', ['reseps' => $reseps]);
    })->name('reseps.index');


    // Route::get('/reseps', 'ResepsController@index');
    Route::get('/reseps/create', 'ResepsController@create');
    Route::post('/reseps', 'ResepsController@store');


    Route::get('/reseps/{resep}', 'ResepsController@show');
    Route::get('/reseps/edit/{resep}', 'ResepsController@edit');
    Route::put('/reseps/update/{resep}', 'ResepsController@update');

    // delete
    Route::get('/reseps/destroy/{resep}', 'ResepsController@destroy');



    // card
    Route::get('/card', 'ResepsController@card');
    Route::get('/card2', 'ResepsController@card2');
    Route::get('/card/detail/{resep}', 'ResepsController@cardDetail');
});








// Route::resource('reseps', 'Resepscontroller');

Route::get('/terima/{resep}', 'ResepsController@terima');
// user
Route::get('/post', 'ResepsController@post');
Route::get('/usr', 'ResepsController@usr');
Route::get('/usrData', 'ResepsController@usrData');



// cari
//Route search
Route::get('/search', 'ResepsController@search');


// require __DIR__ . '';

// Route::get('/users/{user}', function ($id) {
//     $user = User::with('reseps')->find($id);
//     return response()->json($user, 200);
// });
