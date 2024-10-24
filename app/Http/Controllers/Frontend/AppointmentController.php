<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Models\Doctor;
use App\Http\Controllers\Frontend\DoctorsController;


class AppointmentController extends Controller
{
    // AppointmentController.php
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email_id' => 'required|email',
            'phone' => 'required',
            'doctor_id' => 'required|exists:doctors,id',
            'message' => 'required',
        ]);

        // Store the appointment in the database
        $appointment = new Appointment();
        $appointment->name = $request->input('name');
        $appointment->email_id = $request->input('email_id');
        $appointment->phone = $request->input('phone'); // Ensure this is a string if it's too long
        $appointment->date = $request->input('date');
        $appointment->doctor_id = $request->input('doctor_id'); // This should match a doctor ID in the doctors table
        $appointment->save();

        // WhatsApp message logic
        $doctor = Doctor::find($request->doctor_id);
        $whatsappNumber = '919119512345'; // Replace with your WhatsApp number
        $whatsappMessage = urlencode("Hi, I want to book an appointment with Dr. {$doctor->name}.\n\nDetails:\nName: {$request->name}\nEmail: {$request->email_id}\nPhone: {$request->phone}\nMessage: {$request->message}");

        return redirect()->away("https://wa.me/{$whatsappNumber}?text={$whatsappMessage}");
    }
}
