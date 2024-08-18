 @extends('layout.main')

@section('content')







<div class="page-body">
  <div class="container-fluid">
    <div class="page-header">
      <div class="row">
                <div class="col-sm-6">
                  <h3>Expired_books</h3>
                  <div class="mb-3" >
                    <form action="{{route('expiredbook')}}" method="GET" class="form-inline" style="margin-top: 70px">
                      <div class="form-group mr-2">
                          <input type="text" name="query" class="form-control" placeholder="Search Expired Book" value="{{ request('query') }}">
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
                  

                   
                  </div>
                  <div class="card-body">

                    <div class="dt-ext table-responsive">
                      <table class="table " id="custom-button" >
                        <thead>
                          <tr>
                            <th>id</th>
                            <th>p_name</th>
                            <th>p_last_name</th>
                            <th>Lend_date</th>
                            <th>Expire_date</th>
                            <th>Description</th>
                            <th>Lending_Book_name</th>
                            <th>Action</th>

                            
                          
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($expiredbooks as $expiredbook)
                          <tr>
                            <td>{{$expiredbook->id}}</td>
                            <td>{{$expiredbook->p_name}}</td>
                            <td>{{$expiredbook->p_last_name}}</td>
                            <td>{{$expiredbook->lend_date}}</td>
                            <td>{{$expiredbook->expire_date}}</td>
                            <td>{{$expiredbook->description}}</td>
                            <td>{{$expiredbook->book_name}}</td>


                      
                           <td>
                           <a href="deleteexpiredbook/{{$expiredbook->id}}"class ="btn btn-danger">DeLeTe</a></td>

                           
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
   
        <!-- footer end-->
         @endsection
        
  