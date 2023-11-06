<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Client\Request;

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

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect(to:'/profile');
})->middleware('auth', 'signed')->name('verification.verify');

Route::get('/email/verifification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->wit('message','Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name(name:'verification.send');


Route::get('/manage-user', [AdminController::class, 'viewManageUser'])->name('admin.manageUser');
Route::get('/flight-plan-schedule', [AdminController::class, 'viewFlightPlan'])->name('admin.flightPlanSchedule');
Route::get('/instructor', [AdminController::class, 'viewInstructor'])->name('admin.instructor');
Route::get('/student', [AdminController::class, 'viewStudent'])->name('admin.student');
Route::get('/mechanic', [AdminController::class, 'viewMechanic'])->name('admin.mechanic');
Route::get('/aircraft', [AdminController::class, 'viewAircraft'])->name('admin.aircraft');
Route::get('/archived', [AdminController::class, 'viewArchived'])->name('admin.archived');
Route::get('/inspection', [AdminController::class, 'viewInspection'])->name('admin.inspection');

Route::get('/manage-user/new-user', [AdminController::class, 'newUser'])->name('admin.new.userNew');



Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth', 'verified'])->name('index');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
