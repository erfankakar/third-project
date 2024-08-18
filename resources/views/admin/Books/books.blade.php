@extends('layout.main')

@section('content')

<div class="page-body-wrapper horizontal-menu">
        <!-- Page Sidebar Start-->
      
        <!-- Page Sidebar Ends-->
        <div class="page-body">
          <div class="container-fluid">
            <div class="page-header">
              <div class="row">
                <div class="col-sm-6">
                  <h3>Books</h3>
                <div class="mb-3" >
                  <form action="{{ route('books') }}" method="GET" class="form-inline" style="margin-top: 70px">
                    <div class="form-group mr-2">
                        <input type="text" name="query" class="form-control" placeholder="Search Book" value="{{ request('query') }}">
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
                  <a href="{{route('addbook')}}"class="btn btn-primary">ADD Book</a>

                   
                  </div>
                  <div class="card-body">

                    <div class="dt-ext table-responsive">
                      <table class="table" id="custom-button">
                        <thead>
                          <tr>
                            <th>id</th>
                            <th>Name</th>
                            <th>writer</th>
                            <th>page_count</th>
                            <th>Description</th>
                            <th>cat_name</th>
                            <th>Action</th>
                            
                          
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                          $counter = 0;


?>
                          @foreach($books as $book)
                          <tr>
                            <td>{{++$counter}}</td>
                            <td>{{$book->name}}</td>
                            <td>{{$book->writer}}</td>
                            <td>{{$book->page_count}}</td>
                            <td>{{$book->description}}</td>
                            <td>{{$book->catagory_name}}</td>

                      
                            <td><a href="editbook/{{$book->id}}"class ="btn btn-primary">edit</a>
                            <a href="deletebook/{{$book->id}}"class ="btn btn-danger">delete</a></td>


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