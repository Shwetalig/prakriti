<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Models\Specialization;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $specialities = Specialization::all(); 
        return view('frontend.contact' , data: compact('specialities'));
    }
}