@extends('layouts.main')
@section('content')



<div class="container-fluid">
        <div class="card">
          <div class="card-body">

<div class="row">
    <div class="mb-3">


        <div class="d-flex justify-content-center mb-5">
            <picture>
              <source srcset="../../../../public/logo.jpg" type="image/svg+xml">
                <img src="{{ asset('images/logo.jpg') }}" class="img-fluid img-thumbnail" alt="Upload Profile Image">

            </picture> 
          </div>
          


        <label class="mb-2">Upload Profile Image</label>

        <input class="mb-3 form-control form-control-sm" id="formFileSm" type="file" accept="image/jpeg, image/png">

      </div>
    <div class="col-lg-4">
        <label class="mb-2">First name<span style="color: red;">*</span>
        </label>
                <input type="text" class="mb-3 form-control" id="floatingInput" required>
    </div>
    <div class="col-lg-4">
        <label class="mb-2">Middle name <span style="color:rgb(189, 189, 189);">(optional)</span></label>
                <input type="text" class="mb-3 form-control" id="floatingInput" required>
    </div>
    <div class="col-lg-4">
        <label class="mb-2">Last name<span style="color: red;">*</label>
                <input type="text" class="mb-3 form-control" id="floatingInput" required>
    </div>
</div>

<div class="row">
    <div class="col-lg-6">
        <label class="mb-2">Address<span style="color: red;">*</label>
                <input type="text" class="mb-3 form-control" id="floatingInput" required>
    </div>
    <div class="col-lg-6">
        <label class="mb-2">Place of Birth<span style="color: red;">*</label>
                <input type="text" class="mb-3 form-control" id="floatingInput" required>
    </div>
</div>

<div class="row">
    <div class="col-lg-3 col-md-4">
            <label class="mb-2">Date of Birth<span style="color: red;">*</label>
            <input type="date" class="mb-3 form-control" id="floatingInput" required>
    </div>
    <div class="col-lg-2 col-md-4">
            <label class="mb-2">Age<span style="color: red;">*</label>
            <input type="number" class="mb-3 form-control" id="floatingInput" required>
    </div>
    <div class="col-lg-3 col-md-4">
            <label class="mb-2">Nationality<span style="color: red;">*</label>
            <input type="text" class="mb-3 form-control" id="floatingInput" required>
    </div>
    <div class="col-lg-2 col-md-6">
        <label class="mb-2">Sex<span style="color: red;">*</label>

        <select class="mb-3 form-select">
            <option selected value="">Select Sex</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
          </select>
    </div>
    <div class="col-lg-2 col-md-6">
        <label class="mb-2">Contact No.<span style="color: red;">*</label>
        <input type="number" class="mb-3 form-control" id="floatingInput" required>
    </div>
</div>


<div class="row">
    <div class="col-lg-4 col-md-12">
        <label class="mb-2">Email<span style="color: red;">*</label>
                <input type="text" class="mb-3 form-control" id="floatingInput" required>
    </div>
    <div class="col-lg-2 col-md-6">
        <label class="mb-2">Password<span style="color: red;">*</label>
                <input type="text" class="mb-3 form-control" id="floatingInput" required>
    </div>
    <div class="col-lg-2 col-md-6">
        <label class="mb-2">Confirm password<span style="color: red;">*</label>
                <input type="text" class="mb-3 form-control" id="floatingInput" required>
    </div>
    <div class="col-lg-2 col-md-6">
        <label class="mb-2">Role<span style="color: red;">*</label>

        <select class="mb-3 form-select">
            <option selected value="">Select Role</option>
            <option value="Instructor">Instructor</option>
            <option value="Student">Student</option>
            <option value="Mechanic">Mechanic</option>
          </select>
    </div>
    <div class="col-lg-2 col-md-6">
        <label class="mb-2">Status<span style="color: red;">*</label>

        <select class="mb-3 form-select">
            <option selected value="">Select Status</option>
            <option value="Active">Active</option>
            <option value="Inactive">Inactive</option>
          </select>
    </div>
</div>

<a href="{{ route('admin.new.userNew') }}" class="btn btn-primary btn-sm mx-1" type="submit" style="width: 4rem;">Save</a>
<a href="{{ route('admin.manageUser') }}" class="btn btn-danger btn-sm mx-1" style="width: 6rem;">Cancel</a>

 





          </div>
        </div>
      </div>


      


      
@endsection