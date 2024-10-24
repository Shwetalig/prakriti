 @extends('admin.layouts.app')
 


 @section('content')
  <div class="content-wrapper">
     <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1>Edit Brand</h1>
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
                        <label>Brand  Name<span style="color:red">*</span></label>
                        <select class="form-control" name="category_id">
                        <option vlaue="">Select</option>
                        @foreach($getBrand as $value)
                        <option {{$value ->$id == $getRecord ->brand_id) ? 'selected' : ''}} </option>}} value="{{ $value -> id}}">{{$value -> name}}</option>
                        @endforeach
                        </select>
                    </div>
                  <div class="form-group">
                    <label>Brand Name<span style="color:red">*</span></label>
                    <input type="name" class="form-control" name="name" value="{{old('name', $getRecord ->name)}}" required placeholder="Enter Brand Name">
                  </div>  
                  
                  <div class="form-group">
                    <label>Slug<span style="color:red">*</span></label>
                    <input type="name" class="form-control" name="name" value="{{old('slug',$getRecord ->slug)}}" required placeholder="Enter Slug ex. URL">
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
                    <label>Meta Title<span style="color:red">*</span></label>
                    <input type="name" class="form-control" name="name" value="{{old('meta_title',$getRecord ->meta_title)}}" required placeholder="Meta Title">
                  </div>  
                  
                  
                  <div class="form-group">
                    <label>Meta Description</label>
                    <textarea class="form-control" name="meta_description"placeholder="Meta Description" value="{{old('meta_description',$getRecord->meta_description)}}"></textarea>
                  
                  </div>  
                  
                  
                  <div class="form-group">
                    <label>Meta Keywords</label>
                    <input type="name" class="form-control" name="name" value="{{old('meta_keyword',$getRecord->meta_keyword)}}" required placeholder="Meta Keywords">
                  </div>  
                  
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
