@extends('admin.layouts.app')
 


 @section('content')
  <div class="content-wrapper">
     <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1>Edit Speciality</h1>
          </div>
         
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
    <div class="container-fluid">
    <div class="row">
    <div class="col-md-12">
     <div class="card card-primary">
            <form action="" method="post">
               {{csrf_field() }}
                <div class="card-body">
                  <div class="form-group">
                    <label>Speciality Name<span style="color:red">*</span></label>
                    <input type="name" class="form-control" name="name" value="{{old('name', $getRecord ->name)}}" required placeholder="Enter Speciality Name">
                  </div>  
                  
                  <div class="form-group">
                    <label>Description<span style="color:red">*</span></label>
                    <input type="name" class="form-control" name="description" value="{{old('description',$getRecord ->description)}}" required placeholder="Enter description">
                      <div style="color:red">{{ $errors->first('slug')}} </div>
                  </div>

                   <div class="form-group">
                    <label>Status<span style="color:red">*</span></label>
                    <select class="form-control" name="status" required>
                        <option {{old('status') ==0 ? 'selected' : ""}} value="0">Active</option>
                         <option {{old('status') ==1 ? 'selected' : ""}} value="1">Inactive</option>
                       
                    </select>
                  </div>
                  
                  <hr>

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Update</button>
                </div>
              </form>
            </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>     
  </div>
      
 
  @endsection
