 @extends('admin.layouts.app')
 


 @section('content')
  <div class="content-wrapper">
     <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Doctors List</h1>
          </div>
          <div class="col-sm-6" style="text-align: right;">
            <a href="{{url('admin/doctors/add')}}" class="btn btn-primary">Add New Doctor</a>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
               @include('admin.layouts.messages')
             <div class="card">
              <div class="card-header">
                <h3 class="card-title">Doctor List</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th >Id</th>
                      <th>Name</th>
                      <th>Designation</th>
                      <th>Speciality</th>
                      <th>Active</th>
                       <th>Action</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                      
                  @foreach($getRecord as $value)
                  
                    <tr>
                      <td>{{$value->id}}</td>
                      <td>{{$value->name}}</td>
                       <td>{{$value->designation}}</td>
                       <td>{{$value->speciality}}</td>
                       <td>{{$value->active}}</td>
                       
                    
                       <td>
                              <a href="{{url('admin/doctors/edit/'.$value->id)}}" class="btn btn-primary">Edit</a>
                            <a href="{{url('admin/doctors/delete/'.$value->id)}}" class="btn btn-danger">Delete</a>
                         </td>
                    </tr>
                  @endforeach
                  </tbody>
                </table>
                <div class="d-flex justify-content-center">
                        {{ $getRecord->links() }}
                     </div>
               
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
    
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>     
  </div>
      
 
  @endsection
