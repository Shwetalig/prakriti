<?php

namespace App\Http\Controllers\Backend;
use App\Models\Doctor;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function list()
    {
         $data['getRecord'] = Doctor::getRecord();
         $data['header_title']='Doctors';
         $getRecord = Doctor::paginate(10);
        return view('admin.doctors.list',$data);
    }

    public function edit($id)
    {
        $data['getRecord']= Doctor::getSingle($id);
         $data['header_title']='Edit Doctor';
        return view('admin.doctors.edit',$data);
    }
    
    /* Update the specified resource in storage.*/
    public function update($id, Request $request)
    {
               
        $doctor=Doctor::getSingle($id);
        $doctor->name=trim($request->name);
        $doctor->designation=trim($request->designation);
        $doctor->speciality=trim($request->speciality);
        $doctor->save();
        return redirect('admin/doctors/list')->with('success', "Doctors sucessfully updated");
        
    }

    /* adding a new resource.*/
    public function add()
    {
        
         $data['header_title']='Add New Doctor';
        return view('admin.doctors.add',$data);
    }
    
     /* insert in table */
     public function insert(Request $request)
    {
         
        $doctor=new Doctor;
        $doctor->name=trim($request->name);
        $doctor->designation=trim($request->designation);
        $doctor->speciality=trim($request->speciality);
        $doctor->save();
        return redirect('admin/doctors/list')->with('sucess', "Doctor added sucessfully");
        
        
    }
    
     /* deleting a resource.*/
    public function delete($id)
    {
        $doctor = Doctor::find($id);
        $doctor->delete();
        return redirect()->back()->with('success', "Doctor successfully deleted");
  
    }

    
}
