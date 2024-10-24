<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Models\Doctor;
use App\Models\Specialization;
use Illuminate\Http\Request;

class DoctorsController extends Controller
{
    public function index()
    {
        $doctors = Doctor::all();
        $specialities = Specialization::all(); 
        return view('frontend.doctors', compact('doctors', 'specialities'));
    }


}