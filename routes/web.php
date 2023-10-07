<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pdf\PdfController;

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
    return view('welcome');
});

Route::get('/pdf', [PdfController::class, 'download']);
Route::get('/pdf-download', [PdfController::class, 'downloadPdf']);
Route::get('/pdf-steam', [PdfController::class, 'streamPdf']);
