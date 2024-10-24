<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Specialization;
use Illuminate\Http\Request;

class SpecialtiesController extends Controller
{
    public function index()
    {
        $specialities = Specialization::all(); 
        return view('frontend.specialties' , data: compact('specialities'));
    }

    public function detail($id)
    {
        // Fetch the specialization along with its associated doctors
        $speciality = Specialization::with('doctors')->findOrFail($id);
        $specialities = Specialization::all(); 
        // Pass the specialization object to the view
        return view('frontend.specialities_detail', [
            'speciality' => $speciality, // Pass the whole specialization object
        ], compact('specialities'));
    }
}
