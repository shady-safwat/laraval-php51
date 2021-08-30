@extends('layouts.admin')
@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="card-header card-header-primary">
            <h4 class="card-title">Edit Profile</h4>
        </div>
        <div class="card-body">
            <form method="post" action="{{route('user.update'  , $user->id)}}">
                @csrf
                @method('PUT')
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group bmd-form-group">
                        <input type="text" class="form-control" name="name" value="{{$user->name}}">
                        <span class="text-danger">@error('name'){{$message}}@enderror</span>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group bmd-form-group">
                        <input type="email" class="form-control" name="email" value="{{$user->email}}">
                        <span class="text-danger">@error('email'){{$message}}@enderror</span>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group bmd-form-group">
                        <input type="password" class="form-control" name="password">
                        <span class="text-danger">@error('password'){{$message}}@enderror</span>
                    </div>
                </div>
            </div>
    
            <button type="submit" class="btn btn-primary pull-right">Update<div class="ripple-container"></div></button>
            <div class="clearfix"></div>
            </form>

            
        </div>
    </div>
</div>
@endsection