 @extends('admin.layouts.app')
 


 @section('content')
  <div class="content-wrapper">
     <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1>Add New Doctor</h1>
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
                    <label>Doctor Name<span style="color:red">*</span></label>
                    <input type="name" class="form-control" name="name" value="{{old('name')}}" required placeholder="Enter Doctor Name">
                  </div>  
                  
                  <div class="form-group">
                    <label>Designation<span style="color:red">*</span></label>
                    <input type="slug" class="form-control" name="designation" value="{{old('designation')}}" required placeholder="Enter designation">
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
                  <div class="form-group">
                    <label>Speciality<span style="color:red">*</span></label>
                    <input type="meta_title" class="form-control" name="speciality" value="{{old('speciality')}}" required placeholder="Enter Speciality">
                  </div>  
                  
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>     
  </div>
      
 
  @endsection
