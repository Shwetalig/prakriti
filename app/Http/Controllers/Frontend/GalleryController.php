<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Models\Specialization;
use App\Models\Gallery;
use Illuminate\Http\Request;


class GalleryController extends Controller
{
    public function index()
    {
        $specialities = Specialization::all(); 
        $galleries = Gallery::all();
        return view('frontend.gallery' , data: compact('specialities', 'galleries'));
    }


}