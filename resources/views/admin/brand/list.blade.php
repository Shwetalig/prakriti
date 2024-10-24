 @extends('admin.layouts.app')
 


 @section('content')
  <div class="content-wrapper">
     <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Brand List</h1>
          </div>
          <div class="col-sm-6" style="text-align: right;">
            <a href="{{url('admin/brand/add')}}" class="btn btn-primary">Add New Brand</a>
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
                <h3 class="card-title">Brand List</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th >Id</th>
                      <th>Brand Name</th>
                      <th>Slug</th>
                      <th>Meta Title</th>
                      <th>Meta Description</th>
                      <th>Meta Keywords</th>
                      <th>Status</th>
                      <th>Action</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                 @foreach($getRecord as $value)
                    <tr>
                      <td>{{$value->id}}</td>
                      <td>{{$value->name}}</td>
                      <td>{{$value->slug}}</td>
                       <td>{{$value->meta_title}}</td>
                       <td>{{$value->meta_description}}</td>
                       <td>{{$value->meta_keywords}}</td>
                       <td>{{($value->status==0) ? 'Active' : 'Inactive'}}</td>
                      
                       <td>
                              <a href="{{url('admin/sub_category/edit/'.$value->id)}}" class="btn btn-primary">Edit</a>
                            <a href="{{url('admin/sub_category/delete/'.$value->id)}}" class="btn btn-danger">Delete</a>
                         </td>
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
