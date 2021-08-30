@extends('layouts.admin')
@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="card-header card-header-primary">
            <h4 class="card-title">Create Role</h4>
            <p class="card-category">Complete your profile</p>
        </div>
        <div class="card-body">
            <form method="post" action="{{route('role.store')}}">
                @csrf
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group bmd-form-group">
                        <label class="bmd-label-floating">Role name</label>
                        <input type="text" class="form-control" name="name">
                        <span class="text-danger">@error('name'){{$message}}@enderror</span>
                    </div>
                </div>
            </div>
    
            <button type="submit" class="btn btn-primary pull-right">Submit role<div class="ripple-container"></div></button>
            <div class="clearfix"></div>
            </form>

            
        </div>
    </div>
</div>
@endsection