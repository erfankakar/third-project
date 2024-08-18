

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
                  <form class="form theme-form" action="storebook" method="post">
                    @csrf
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                          <div class="mb-3">
                            <label class="form-label" for="">name</label>
                            <input class="form-control" id="exampleFormControlInput1" type="name" name="name">
                          </div>
                        </div>
                      </div>


                      <div class="row">
                        <div class="col">
                          <div class="mb-3">
                            <label class="form-label" for="">writer</label>
                            <input class="form-control" id="exampleFormControlInput1" type="name" name="writer">
                          </div>
                        </div>
                      </div>



                      <div class="row">
                        <div class="col">
                          <div class="mb-3">
                            <label class="form-label" for="">page_count</label>
                            <input class="form-control" id="exampleFormControlInput1" type="number" name="page_count">
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
                        <label class="col-form-label col-md-2">cat_id</label>
                        <div class="col-md-10">
                         <select name="cat_id" class="form-control" id="">
                            @foreach($allcatagories as $cat)
                            <option value="{{$cat->id}}">{{$cat->name}}</option>
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