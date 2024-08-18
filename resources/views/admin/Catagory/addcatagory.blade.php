@extends('layout.main')

@section('content')


       
        <!-- Page Sidebar Ends-->
        <div class="page-body">
            
          <!-- Container-fluid starts-->
          <div class="container-fluid">
            <div class="row">
              <div class="col-sm-12">
                <div class="card">
                  <div class="card-header pb-0">
                    <h5>Add Catagory</h5>
                  </div>
                  <form class="form theme-form" action="storecatagory" method="post" id="addCategoryForm">
                    @csrf
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                          <div class="mb-3">
                            <label class="form-label" for="">name</label>
                            <input class="form-control" id="name" type="text" name="name">
                            <div class="invalid-feedback" id="nameError"></div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <div class="mb-3">
                            <label class="form-label" for="">Description</label>
                            <input class="form-control" id="description" type="text" name="description">
                            <div class="invalid-feedback" id="descriptionError"></div>
                          </div>
                        </div>
                      </div>
                    
                    
                  
                    </div>
                    <div class="card-footer text-end">
                    <button class="btn btn-success" type="submit">Submit</button>
                    
                    <input class="btn btn-light" type="reset" value="Cancel">
                  </div>
                  </form>
                </div>
      
              
                
                
                <style>
                  .form-control.is-invalid {
    border-color: red !important;
  }
  </style>
<script>
  document.getElementById('addCategoryForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent the form from submitting
    
    // Get the input values
    var name = document.getElementById('name').value;
    var description = document.getElementById('description').value;
    
    // Reset the error messages and input styles
    document.getElementById('name').classList.remove('is-invalid');
    document.getElementById('description').classList.remove('is-invalid');
    document.getElementById('nameError').textContent = '';
    document.getElementById('descriptionError').textContent = '';
    
    // Validate the inputs
    var isValid = true;
    if (!name.trim()) {
      document.getElementById('name').classList.add('is-invalid');
      document.getElementById('nameError').textContent = 'Name is required.';
      isValid = false;
    }
    if (!description.trim()) {
      document.getElementById('description').classList.add('is-invalid');
      document.getElementById('descriptionError').textContent = 'Description is required.';
      isValid = false;
    }
    
    // If the inputs are valid, submit the form
    if (isValid) {
      this.submit();
    }
  });
</script>
  @endsection