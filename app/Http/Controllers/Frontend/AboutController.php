<?php


namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Models\Specialization;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $specialities = Specialization::all(); 
        return view('frontend.about' , data: compact('specialities'));
    }
}