@extends('panel.layouts.app')

@section('content')

  

    <div class="pagetitle">
      <h1>User</h1>
    </div>

    <section class="section">
        <div class="row">
  
          <div class="col-lg-12">
            @include('_message')
            <div class="card">
              <div class="card-body">
                
                
                <div class="row">
                    <div class="col-md-6">
                        <h5 class="card-title">User Lists</h5>
                    </div>
                    <div class="col-md-6" style="text-align: right;">
                        <a href="{{ url('panel/user/add')}}" class="btn btn-primary" style="margin-top: 10px;">Add</a>
                    </div>
                </div>
                <!-- Table with stripped rows -->
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Name</th>
                      <th scope="col">Email</th>
                      <th scope="col">Role</th>
                      <th scope="col">Hobby</th>
                      <th scope="col">Date</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($getRecord as $value)
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $value->name }}</td>
                        <td>{{ $value->email }}</td>
                        <td>{{ $value->role_name }}</td>

                        <td>
                          @if($value->hobbies->isNotEmpty())
                              <ul>
                                  @foreach ($value->hobbies as $hobby)
                                      <li>{{ $hobby->hobby_name }}</li>
                                  @endforeach
                              </ul>
                          @else
                              <em>No hobbies assigned</em>
                          @endif
                      </td>

                        <td>{{ $value->created_at }}</td>
                        <td>
                            <a href="{{ url('panel/user/edit/'.$value->id) }}" class="btn btn-primary btn-sm">Edit</a>
                            <a href="{{ url('panel/user/delete/'.$value->id) }}" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                        
                    @endforeach
                  </tbody>
                </table>
                <!-- End Table with stripped rows -->
  
              </div>
            </div>
  
          </div>
        </div>
      </section>

  
@endsection
 

  