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
                  <h3>Lending_books</h3>
                  <div class="mb-3" >
                    <form action="{{ route('lending_book') }}" method="GET" class="form-inline" style="margin-top: 70px">
                      <div class="form-group mr-2">
                          <input type="text" name="query" class="form-control" placeholder="Search Lending Book" value="{{ request('query') }}">
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
                  <a href="addlendingbook"class="btn btn-primary">ADD lending_book</a>

                   
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
                            <th>statusa</th>
                            <th>statusb</th>
                            <th>Book_name</th>
                            <th>Action</th>

                            
                          
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($lends as $lend)
                          <tr>
                            <td>{{$lend->id}}</td>
                            <td>{{$lend->p_name}}</td>
                            <td>{{$lend->p_last_name}}</td>
                            <td>{{$lend->lend_date}}</td>
                            <td>{{$lend->expire_date}}</td>
                            <td>{{$lend->description}}</td>
                            <td><div class="col-md-2"></div> <a href=""> <div class="btn-sm btn-success">yes</div></a></div></td>
<td>
    @if ($lend->statusa == 'delivered')
        The book has been delivered.
    @else ($lend->statusa == 'not_delivered')
        The book has not been delivered yet.
    
    @endif
</td>
                            <td>{{$lend->book_name}}</td>

                      
                           <td><a href="editlendingbook/{{$lend->id}}"class ="btn btn-primary ">edit</a>
                           <a href="deletelendingbook/{{$lend->id}}"class ="btn-lg btn-danger">DeLeTe</a></td>


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