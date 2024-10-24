<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\SpecialtiesController;
use App\Http\Controllers\Frontend\DoctorsController;
use App\Http\Controllers\Frontend\GalleryController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\AppointmentController;
use App\Http\Controllers\Backend\UsersController;
use App\Http\Controllers\Backend\DoctorController;
use App\Http\Controllers\Backend\SpecializationsController;
use App\Http\Controllers\Backend\AppointmentsController;



Route::get('/', function () {
    return view('frontend.index');
});

Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);
Route::get('/specialties', [SpecialtiesController::class, 'index']);
Route::get('/doctors', [DoctorsController::class, 'index']);
Route::get('/gallery', [GalleryController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);
Route::get('/specialities_detail/{id}', [SpecialtiesController::class, 'detail'])->name('frontend.specialities_detail');

// web.php
Route::post('/appointments', [AppointmentController::class, 'store'])->name('appointments.store');





Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->name('admin.dashboard');

Route::get('/admin/doctors/list',[DoctorController::class,'list']);
Route::get('/admin/doctors/edit/{id}',[DoctorController::class,'edit']);
Route::post('/admin/doctors/edit/{id}',[DoctorController::class,'update']);
Route::get('/admin/doctors/add',[DoctorController::class,'add']);
Route::post('/admin/doctors/add',[DoctorController::class,'insert']);
Route::get('/admin/doctors/delete/{id}',[DoctorController::class,'delete']);

Route::get('/admin/specialities/list',[SpecializationsController::class,'list']);
Route::get('/admin/specialities/edit/{id}',[SpecializationsController::class,'edit']);
Route::post('/admin/specialities/edit/{id}',[SpecializationsController::class,'update']);
Route::get('/admin/specialities/add',[SpecializationsController::class,'add']);
Route::post('/admin/specialities/add',[SpecializationsController::class,'insert']);
Route::get('/admin/specialities/delete/{id}',[SpecializationsController::class,'delete']);


Route::get('/admin/appointments/list',[AppointmentsController::class,'list']);
