<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FileUploadController;
 
Route::get('file-upload', [ FileUploadController::class, 'getFileUploadForm' ])->name('get.fileupload');
Route::post('file-upload', [ FileUploadController::class, 'store' ])->name('store.file');
Route::get('upload-file', [ FileUploadController::class, 'show' ])->name('show.file');

Route::get('/', function () {
    return view('file-upload');
});

// Route::get('/', function () {
//     return view('welcome');
// });
