<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ManagePreMarriageCourse\PreMarriageCourseController;
use App\Http\Controllers\UserController;

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
	return redirect('/login');
});

Auth::routes();

Auth::routes(['verify' => true]);

Route::group(['middleware' => ['auth', 'verified', 'user-role:admin']], function () {
	Route::get('/admin', [HomeController::class, 'indexAdmin'])->name('admin.home');
	Route::get('/admin/staff_list', [UserController::class, 'readStaff'])->name('admin.staff_list');
	Route::get('/admin/staff_list/staff_form', [UserController::class, 'staffForm'])->name('admin.staff_form');
	Route::post('/admin/staff_list/add_staff', [UserController::class, 'createStaff'])->name('admin.add_staff');
	Route::get('/admin/staff_list/profile/{id}', [UserController::class, 'readStaffProfile'])->name('admin.staff_profile');
	Route::put('/admin/staff_list/profile/{id}/update', [UserController::class, 'updateStaff'])->name('admin.update_staff');
	Route::delete('/admin/staff_list/profile/{id}/delete', [UserController::class, 'deleteStaff'])->name('admin.delete_staff');
});

Route::group(['middleware' => ['auth', 'verified', 'user-role:staff']], function () {
	Route::get('/staff', [HomeController::class, 'indexStaff'])->name('staff.home');
});

Route::group(['middleware' => ['auth', 'verified', 'user-role:user']], function () {
	Route::get('/user', [HomeController::class, 'indexUser'])->name('user.home');
	Route::get('/Terms&Condition',[PreMarriageCourseController::class, 'indexCourse'])->name('user.terms');
	Route::get('/Organization',[PreMarriageCourseController::class, 'indexOrganization'])->name('user.organization');
	Route::get('/CourseStatus',[PreMarriageCourseController::class, 'indexCourseStatus'])->name('user.courseStatus');
	Route::get('/MarriageRegistration',[MarriageRegistrationController::class,'indexRegister'])->name('Register_form');

});
