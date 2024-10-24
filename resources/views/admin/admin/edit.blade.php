 @extends('admin.layouts.app')
 


 @section('content')
  <div class="content-wrapper">
     <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1>Edit Admin</h1>
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
                    <label>Name</label>
                    <input type="name" class="form-control" value="{{$getRecord->name}}}}" name="name" required placeholder="Enter Name">
                  </div>
                  <div class="form-group">
                    <label >Email</label>
                    <input type="email" class="form-control"value="{{$getRecord->email}}}}" name="email" required  placeholder="Enter Email">
                  </div>
                   <div class="form-group">
                    <label >Password</label>
                    <input type="text" class="form-control"  name="password" placeholder="Password">
                    <p>Do you want to change password so, please add</p>
                  </div>
                   <div class="form-group">
                    <label>Status</label>
                    <select class="form-control" name="status"required>
                        <option {{ ($getRecord->status == 0) ? 'selected ' : ""}} value="0" >Active</option>
                         <option {{ ($getRecord->status == 0) ? 'selected ' : ""}}  value="1">Inactive</option>
                       
                    </select>
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
