

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
                    <h5>Add Book</h5>
                  </div>
                  <form class="form theme-form" action="storelendingbook" method="post">
                    @csrf
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                          <div class="mb-3">
                            <label class="form-label" for="">p_name</label>
                            <input class="form-control" id="exampleFormControlInput1" type="name" name="p_name">
                          </div>
                        </div>
                      </div>


                      <div class="row">
                        <div class="col">
                          <div class="mb-3">
                            <label class="form-label" for="">p_last_name</label>
                            <input class="form-control" id="exampleFormControlInput1" type="name" name="p_last_name">
                          </div>
                        </div>
                      </div>



                      <div class="row">
                        <div class="col">
                          <div class="mb-3">
                            <label class="form-label" for="">lend_date</label>
                            <input class="form-control" id="exampleFormControlInput1" type="date" name="lend_date">
                          </div>
                        </div>
                      </div>



                      <div class="row">
                        <div class="col">
                          <div class="mb-3">
                            <label class="form-label" for="">expire_date</label>
                            <input class="form-control" id="exampleFormControlInput1" type="date" name="expire_date">
                          </div>
                        </div>
                      </div>





                      <div class="row">
                        <div class="col">
                          <div class="mb-3">
                            <label class="form-label" for="">Description</label>
                            <input class="form-control"  type="text" name="description">
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <label class="col-form-label col-md-2">book_name</label>
                        <div class="col-md-10">
                         <select name="books_id" class="form-control" id="">
                            @foreach($books as $book)
                            <option value="{{$book->id}}">{{$book->name}}</option>
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