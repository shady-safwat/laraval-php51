@extends('layouts.admin')
@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="card-header card-header-primary">
            <h4 class="card-title">Edit Role</h4>
        </div>
        <div class="card-body">
            <form method="post" action="{{route('role.update'  , $role->id)}}">
                @csrf
                @method('PUT')
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group bmd-form-group">
                        <input type="text" class="form-control" name="name" value="{{$role->name}}">
                        <span class="text-danger">@error('name'){{$message}}@enderror</span>
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