 @extends('admin.layouts.app')
 


 @section('content')
  <div class="content-wrapper">
     <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>User Profiles</h1>
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
                <h3 class="card-title">User Profiles</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th >Id</th>
                      <th>User id</th>
                      <th>Phone</th>
                      <th>Email</th>
                       <th>Address</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                      @foreach($getRecord as $value)
                    <tr>
                      <td>{{$value->user_id}}</td>
                      <td>{{$value->name}}</td>
                      <td>{{$value->phone}}</td>
                       <td>{{$value->email}}</td>
                       
                         <td>{{$value->address}}</td>
                       
                        
                    </tr>
                   @endforeach
                  </tbody>
                </table>
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
