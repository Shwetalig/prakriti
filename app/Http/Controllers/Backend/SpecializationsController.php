<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Specialization;
use Illuminate\Http\Request;

class SpecializationsController extends Controller
{
    /* Display a listing of the resource.*/
    public function list()
    {
         $data['getRecord'] = Specialization::getRecord();
         $data['header_title']='Specialization';
         $getRecord = Specialization::paginate(10);
        return view('admin.specialities.list',$data);
    }

    public function edit($id)
    {
        $data['getRecord']= Specialization::getSingle($id);
         $data['header_title']='Edit Specialization';
        return view('admin.specialities.edit',$data);
    }
    
    /* Update the specified resource in storage.*/
    public function update($id, Request $request)
    {
               
        $speciality=Specialization::getSingle($id);
        $speciality->name=trim($request->name);
        $speciality->description=trim($request->description);
        $speciality->save();
        return redirect('admin/specialities/list')->with('success', "Specialization sucessfully updated");
        
    }

    /* adding a new resource.*/
    public function add()
    {
        
         $data['header_title']='Add New Specialization';
        return view('admin.specialities.add',$data);
    }
    
     /* insert in table */
     public function insert(Request $request)
    {
         
        $speciality=new Specialization;
        $speciality->name=trim($request->name);
        $speciality->description=trim($request->description);
        $speciality->save();
        return redirect('admin/specialities/list')->with('sucess', "Specialities added sucessfully");
        
        
    }
    
     /* deleting a resource.*/
    public function delete($id)
    {
        $speciality = Specialization::find($id);
        $speciality->delete();
        return redirect()->back()->with('success', "Speciality successfully deleted");
  
    }
}
