<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ManagePreMarriageCourse\PreMarriageCourseController;
use App\Http\Controllers\ManageMarriageApplication\MarriageApplicationController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ManageMarriageRegistration\MarriageRegistrationController;

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
	Route::get('/ViewOrganization',[PreMarriageCourseController::class, 'indexViewOrganization'])->name('user.viewOrganization');
	Route::get('/CourseStatus',[PreMarriageCourseController::class, 'indexCourseStatus'])->name('user.courseStatus');
	Route::get('/CourseForm',[PreMarriageCourseController::class, 'indexCourseForm'])->name('user.courseForm');

	Route::get('/ApplicationConsent',[MarriageApplicationController::class, 'indexConsent'])->name('user.ApplicationConsent');
	Route::get('/ApplicationHiv',[MarriageApplicationController::class, 'indexHiv'])->name('user.ApplicationHiv');
	Route::get('/ApplicationResident',[MarriageApplicationController::class, 'indexResident'])->name('user.ApplicationResident');
	Route::get('/ApplicationPermission',[MarriageApplicationController::class, 'indexPermission'])->name('user.ApplicationPermission');
	Route::get('/ApplicationChecklist',[MarriageApplicationController::class, 'indexChecklist'])->name('user.ApplicationChecklist');

	Route::get('/MarriageRegistration',[MarriageRegistrationController::class,'indexRegister'])->name('Register_form');
	Route::get('/RegistrationList',[MarriageRegistrationController::class,'indexList'])->name('Register_list');
	Route::get('/RegistrationForm',[MarriageRegistrationController::class,'indexForm'])->name('Register_newForm');
	Route::get('/RegistrationFormPasangan',[MarriageRegistrationController::class,'indexFormPasangan'])->name('Register_FormPasangan');
	Route::get('/RegistrationMaklumat', [MarriageRegistrationController::class, 'indexMaklumat'])->name('MaklumatPerkahwinan');
});
