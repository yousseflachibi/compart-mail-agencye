<?php

use App\Http\Controllers\FileUploadController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FileDownloadController;



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

// Route::get('/', function() {
//     return view('dashboard');
// })->middleware('auth');

Route::get('/','App\Http\Controllers\AgenceController@listfichier')->middleware('auth');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/encrypt','App\Http\Controllers\EncryptionController@parcourir');
// Route::get('/decrypt','App\Http\Controllers\EncryptionController@parcourir');

// Route::get('/upload/agence',function(){
//     return view('Agence/agence');
// });
// Route::get('/upload/sc2',function(){
//     return view('Sc2/sc2');
// });

Route::get('/showall',function(){
    return view('Sc2/showall');
 });
 Route::get('/Table_fichier','App\Http\Controllers\Table_fichier@index');
 Route::get('/Table_fichier_2','App\Http\Controllers\Table_fichier@index_2');
Route::get('/show-all-prescription','App\Http\Controllers\ShowAllController@delete')->name('show-all-prescription');
Route::get('/downloadf','App\Http\Controllers\FileDownloadController@index')->name('downloadf');
Route::get('/downloadf2','App\Http\Controllers\FileDownloadController@index2')->name('downloadf2');
Route::get('/doTraitement','App\Http\Controllers\sc2Controller@comparaison_func_traitement')->name('doTraitement');

Route::get('/delete-2','App\Http\Controllers\ShowAllController@delete_2')->name('delete-2');




Route::get('/show-sc2','App\Http\Controllers\sc2Controller@listagence_one_file');
Route::get('/show-all','App\Http\Controllers\sc2Controller@comparaison_func');
Route::get('/show-agence','App\Http\Controllers\AgenceController@listfichier');

// Route::get('/showall','App\Http\Controllers\ShowAllController@afficher');

//Route::get('file-upload', [FileUploadController::class, 'fileUpload'])->name('file.upload');
Route::post('file-upload', [FileUploadController::class, 'fileUploadPost'])->name('file.upload.post');
Route::post('file-upload2', [FileUploadController::class, 'fileUploadPost2'])->name('file.upload.post2');
Route::get('/file-download', [FileDownloadController::class, 'index'])->name('file.download.index');
Route::get('/file-download_2', [FileDownloadController::class, 'index2'])->name('file.download.index2');

// Route::get('file-upload', [FileUploadController::class, 'fileUpload2'])->name('file.upload');
// Route::post('file-upload', [FileUploadController::class, 'fileUploadPost2'])->name('file.upload.post');
