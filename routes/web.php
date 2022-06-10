<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/apply-job', [App\Http\Controllers\ApplyJobController::class, 'index'])->name('apply_job');
Route::post('/apply_job_process', [App\Http\Controllers\ApplyJobController::class, 'apply_job_process'])->name('apply_job_process');


Auth::routes([
    'register'=>false
]);

Route::get('/home', function () {
    return redirect(route('manage_job_applications'));
})->name('home');

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/job-applications', [App\Http\Controllers\ManageJobsController::class, 'index'])->name('manage_job_applications');
Route::get('/job-applications/{application_id}', [App\Http\Controllers\ManageJobsController::class, 'view_application'])->name('view_application');
Route::delete('/job-applications/delete/{application_id}', [App\Http\Controllers\ManageJobsController::class, 'delete_application'])->name('manage_job_applications.delete');
