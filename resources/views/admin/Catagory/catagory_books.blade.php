@extends('layout.main')

@section('content')

<div class="page-body-wrapper horizontal-menu">
        <!-- Page Sidebar Start-->
        
        <!-- Page Sidebar Start-->
      
        <div class="page-body">
          <div class="container-fluid">
            <div class="page-header">
              <div class="row">
                <div class="col-sm-6">
                  <h3>CatagoryBook</h3>
                  <div class="mb-3">
                    <form action="{{ route('catagory_books') }}" method="GET" class="form-inline">
                        <div class="form-group mr-2">
                            <input type="text" name="query" class="form-control" placeholder="Search categories" value="{{ request('query') }}">
                        </div>
                        <button type="submit" class="btn btn-primary">Search</button>
                    </form>
                </div>
                
                </div>
                <div class="col-sm-6">
                  <!-- Bookmark Start-->
                  <div class="bookmark">
                   
                  </div>
                  <!-- Bookmark Ends-->
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid starts-->
          <div class="container-fluid">
            <div class="row">
              <div class="col-sm-12">
                <div class="card">
                  <div class="card-header">
                  <a href="{{route('addcatagory')}}"class="btn btn-primary">ADD CATAGORY</a>

                   
                  </div>
                  <div class="card-body">

                    <div class="dt-ext table-responsive">
                      <table class="table" id="custom-button">
                        <thead>
                          <tr>
                            <th>id</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Action</th>
                          
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($cats as $cat)
                          <tr>
                            <td>{{$cat->id}}</td>
                            <td>{{$cat->name}}</td>
                            <td>{{$cat->description}}</td>
                      
                           <td><a href="editcatagory/{{$cat->id}}"class ="btn btn-primary">edit</a>
                           <a href="deletecatagory/{{$cat->id}}"class ="btn btn-danger">delete</a></td>


                          </tr>
                        @endforeach
                        </tfoot>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
              
            </div>
          </div>
          <!-- Container-fluid Ends-->
        </div>
        <!-- footer start-->
       
      </div>
      @endsection