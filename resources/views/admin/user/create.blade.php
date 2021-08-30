@extends('layouts.admin')
@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="card-header card-header-primary">
            <h4 class="card-title">Create Profile</h4>
            <p class="card-category">Complete your profile</p>
        </div>
        <div class="card-body">
            <form method="post" action="{{route('user.store')}}">
                @csrf
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group bmd-form-group">
                        <label class="bmd-label-floating">Username</label>
                        <input type="text" class="form-control" name="name">
                        <span class="text-danger">@error('name'){{$message}}@enderror</span>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group bmd-form-group">
                        <label class="bmd-label-floating">Email address</label>
                        <input type="email" class="form-control" name="email">
                        <span class="text-danger">@error('email'){{$message}}@enderror</span>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group bmd-form-group">
                        <label class="bmd-label-floating">Password</label>
                        <input type="password" class="form-control" name="password">
                        <span class="text-danger">@error('password'){{$message}}@enderror</span>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="form-group bmd-form-group">
                        <select class="form-control" name="role">
                            @foreach ($roles as $role)
                                <option style="color:black" value="{{$role->id}}">{{$role->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>

    
            <button type="submit" class="btn btn-primary pull-right">Update Profile<div class="ripple-container"></div></button>
            <div class="clearfix"></div>
            </form>

            
        </div>
    </div>
</div>
@endsection