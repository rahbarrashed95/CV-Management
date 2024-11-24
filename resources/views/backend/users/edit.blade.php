@extends('backend.partials.app')
@section('content')
<main>
    <div class="container-fluid px-4">
        <h3 class="mt-4">Users</h3>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Users Update</li>
        </ol>
    <div class="card">
                <div class="card-body">
                  <h4 class="card-title">User Update</h4>
                  <form class="forms-sample" action="{{route('admin.users.update', $user->id)}}" method="POST" id="ajax_form">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <strong for="name">Name</strong>
                                <input type="text" id="name" class="form-control" name="name" placeholder="name..." value="{{$user->name}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <strong for="email">Email</strong>
                                <input type="email" id="email" class="form-control" name="email" readonly value="{{$user->email}}">
                            </div>
                        </div>
             
                        <div class="col-md-6">
                            <div class="form-group">
                                <strong for="password">Password</strong>
                                <input type="password" id="password" class="form-control" name="password" placeholder="Password..." autocomplete="off" autofocus="off">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <strong for="role">Role</strong>
                                 <select name="role" id="role" class="form-control">
                                    <option value="" disabled selected>Choose a Role</option>
                                    @foreach($roles as $role)
                                        <option value="{{$role->name}}" @if($role->name == $user->hasRole($role))  selected @endif>{{$role->name}}</option>
                                    @endforeach
                                 </select>   
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="form-group">
                                <strong for="phone">Phone</strong>
                                <input type="text" id="phone" class="form-control" name="phone" value="{{$user->phone}}">
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="form-group">
                                <strong for="age">Age</strong>
                                <input type="text" id="age" class="form-control" name="age" value="{{$user->age}}">
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="form-group">
                                <strong for="designation">Designation</strong>
                                <input type="text" id="designation" class="form-control" name="designation" value="{{$user->designation}}">
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="form-group">
                                <strong for="address">Address</strong>
                                <textarea id="address" class="form-control" name="address">{{ $user->address }}</textarea>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="form-group">
                                <strong for="details">Details</strong>
                                <textarea id="details" class="form-control" name="details">{{ $user->details }}</textarea>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Key Skill</label>
                                <select class="form-control js-example-basic-multiple w-100" name="skill[]" multiple="multiple">
                                  <option value="html5">HTML5</option>
                                  <option value="css3">CSS3</option>
                                  <option value="jquery">JQUERY</option>
                                  <option value="javascript">Javascript</option>
                                  <option value="bootstrap">Bootstrap</option>
                                  <option value="ajax">Ajax</option>
                                  <option value="php">PHP</option>
                                  <option value="Laravel">Laravel</option>
                                  <option value="mysql">Mysql</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="form-group">
                                <strong for="image">Image</strong>
                                <input type="file" id="image" class="form-control" name="image">
                            </div>
                        </div>
                        
                    </div> 
                    
                    <button type="submit" class="btn btn-primary mr-2">Update</button>
                  </form>
                </div>
              </div>
    </div>
</main>
                
@endsection

