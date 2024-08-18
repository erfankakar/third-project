

@extends('layout.main')

@section('content')
<div class="page-body-wrapper horizontal-menu">
        <!-- Page Sidebar Start-->
     
        <!-- Page Sidebar Ends-->
        <div class="page-body">
            
          <!-- Container-fluid starts-->
          <div class="container-fluid">
            <div class="row">
              <div class="col-sm-12">
                <div class="card">
                  <div class="card-header pb-0">
                    <h5>Edit Book</h5>
                  </div>
                  <form class="form theme-form" action="../updatelendingbook" method="post">
                  <input type="hidden" value="{{$lends->id}}" name="id">

                    @csrf
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                          <div class="mb-3">
                            <label class="form-label" for="">p_name</label>
                            <input class="form-control" id="exampleFormControlInput1" type="name" value="{{$lends->p_name}}" name="p_name">
                          </div>
                        </div>
                      </div>


                      <div class="row">
                        <div class="col">
                          <div class="mb-3">
                            <label class="form-label" for="">p_last_name</label>
                            <input class="form-control" id="exampleFormControlInput1" type="name"
                            value="{{$lends->p_last_name}}" name="p_last_name">
                          </div>
                        </div>
                      </div>



                      <div class="row">
                        <div class="col">
                          <div class="mb-3">
                            <label class="form-label" for="">lend_date</label>
                            <input class="form-control" id="exampleFormControlInput1" type="date"value="{{$lends->lend_date}}"
                             name="lend_date">
                          </div>
                        </div>
                      </div>



                      <div class="row">
                        <div class="col">
                          <div class="mb-3">
                            <label class="form-label" for="">expire_date</label>
                            <input class="form-control" id="exampleFormControlInput1" type="date"
                            value="{{$lends->expire_date}}" name="expire_date">
                          </div>
                        </div>
                      </div>





                      <div class="row">
                        <div class="col">
                          <div class="mb-3">
                            <label class="form-label" for="">Description</label>
                            <input class="form-control"  type="text" name="description" value="{{$lends->description}}">
                          </div>
                        </div>
                      </div>

                   
                      <div class="row">
                        <label class="col-form-label col-md-2">book_name</label>
                        <div class="col-md-10">
                         <select name="books_id" class="form-control" id="">
                            @foreach($books as $book)
                            <option value="{{$book->books_id}}" @if($book->id == $lends->books_id)selected       @endif
                              >{{$book->name}}</option>
            @endforeach
                         </select>
                        </div>
                                        </div>

                      
                    
                    
                  
                    </div>
                    <div class="card-footer text-end">
                    <input class="btn btn-success" type="submit" value="Submit">
                      
                      <input class="btn btn-light" type="reset" value="Cancel">
                    </div>
                  </form>
                </div>
      
              
      @endsection