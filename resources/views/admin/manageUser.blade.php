@extends('layouts.main')
@section('content')

      <div class="container-fluid">
        <div class="container-fluid">
          <div class="card">
            <div class="card-body">

                <div class="table table-responsive">
                  <span>Export as</span>
                  <table id="example" class="display nowrap" style="width:100%">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Age</th>
                                <th>Sex</th>
                                <th>Address</th>
                                <th>Birth Place</th>
                                <th>Birth Date</th>
                                <th>Nationality</th>
                                <th>Contact</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Status</th>
                                <th>
                                  <div class="d-flex justify-content-center">
                                    <a href="{{ route('admin.new.userNew') }}" class="btn btn-primary btn-sm">Add</a>
                                  </div>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                          @foreach ($data as $users)
                              <tr>
                                <td>{{ $users->name }} {{ $users->lastName }}</td>
                                <td>{{ $users->age }}</td>
                                <td>{{ $users->sex }}</td>
                                <td>{{ $users->address }}</td>
                                <td>{{ $users->birthPlace }}</td>
                                <td>{{ $users->birthDate }}</td>
                                <td>{{ $users->nationality }}</td>
                                <td>{{ $users->contact }}</td>
                                <td>{{ $users->email }}</td>
                                <td>{{ $users->role }}</td>
                                <td>{{ $users->status }}</td>

                                <td>
                                  <div class="d-flex justify-content-center">
                                    <button type="button" class="btn btn-success btn-sm">Update</button>
                                  </div>
                                </td>
                              </tr>
                          @endforeach
                        </tbody>
                    </table>
                </div>
            
              {{-- <h5 class="card-title fw-semibold mb-4">Buttons</h5>
              <div class="card">
                <div class="card-body p-4">
                  <button type="button" class="btn btn-primary m-1">Primary</button>
                  <button type="button" class="btn btn-secondary m-1">Secondary</button>
                  <button type="button" class="btn btn-success m-1">Success</button>
                  <button type="button" class="btn btn-danger m-1">Danger</button>
                  <button type="button" class="btn btn-warning m-1">Warning</button>
                  <button type="button" class="btn btn-info m-1">Info</button>
                  <button type="button" class="btn btn-light m-1">Light</button>
                  <button type="button" class="btn btn-dark m-1">Dark</button>
                  <button type="button" class="btn btn-link m-1">Link</button>
                </div>
              </div> --}}
            
            </div>
          </div>
        </div>
        
                <!-- <div class="py-6 px-6 text-center">
          <p class="mb-0 fs-4">Design and Developed by &COPY; <a href="https://adminmart.com/" target="_blank" class="pe-1 text-primary text-decoration-underline">AdminMart.com</a> Distributed by <a href="https://themewagon.com">ThemeWagon</a></p>
        </div> -->
      </div>
    </div>
  </div>
  @endsection