<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Models\Specialization;
use App\Models\Doctor;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $specialities = Specialization::all(); // Fetch all specialities
        $doctors = Doctor::all(); // Fetch only the first 10 doctors
        return view('frontend.index', compact('specialities', 'doctors')); // Pass data to the view
    }
    
}