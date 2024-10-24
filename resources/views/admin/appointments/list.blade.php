 @extends('admin.layouts.app')
 


 @section('content')
  <div class="content-wrapper">
     <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Appointments List</h1>
          </div>
          <div class="col-sm-6" style="text-align: right;">
            <a href="{{url('admin/appointments/add')}}" class="btn btn-primary">Add New Appointments</a>
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
                <h3 class="card-title">Appointments List</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th >Id</th>
                      <th>Name</th>
                      <th>Email id</th>
                      <th>Phone</th>
                      <th>Doctor</th>
                       <th>Date</th>
                    </tr>
                  </thead>
                  <tbody>
                 @foreach($getRecord as $value)
                    <tr>
                      <td>{{$value->id}}</td>
                      <td>{{$value->name}}</td>
                      <td>{{$value->email_id}}</td>
                      <td>{{$value->phone}}</td>
                      <td>{{$value->doctor_id}}</td>
                      <td>{{$value->created_at}}</td>
                    </tr>
                  @endforeach
                  </tbody>
                </table>
                 <div style="padding:10px; float: right;">
                    {!!$getRecord->appends(Illuminate\Support\Facades\Request::except('page'))->links() !!}
                    
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
