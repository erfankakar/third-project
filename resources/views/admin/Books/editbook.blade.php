

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
                  <form class="form theme-form" action="../updatebook" method="post">
                    <input type="hidden" value="{{$books?->id}}" name="id">
                    @csrf
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                          <div class="mb-3">
                            <label class="form-label" for="">name</label>
                            <input class="form-control" id="exampleFormControlInput1" type="name" name="name" value="{{$books?->name}}">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <div class="mb-3">
                            <label class="form-label" for="">writer</label>
                            <input class="form-control" id="exampleFormControlInput1" type="name" name="writer" value="{{$books?->writer}}">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <div class="mb-3">
                            <label class="form-label" for="">page_count</label>
                            <input class="form-control" id="exampleFormControlInput1" type="name" name="page_count" value="{{$books?->page_count}}">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <div class="mb-3">
                            <label class="form-label" for="">Description</label>
                            <input class="form-control"  type="text" name="description" value="{{$books?->description}}">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">


        <!-- Page Sidebar Start-->
      
     
              
      
                          <div class="mb-3">
                            <label class="form-label" for="">cat_name</label>
                            <select name="cat_id" class="form-control" id="">
                              @foreach($allcatagories as $cat)
                              <option value="{{$cat?->id}}"> {{$cat?->name}} </option>
                              @endforeach
                            </select>
                          </div>
                          </div>
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