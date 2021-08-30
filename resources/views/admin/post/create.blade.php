@extends('layouts.admin')
@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="card-header card-header-primary">
            <h4 class="card-title">Create Post</h4>
            <p class="card-category">Complete your profile</p>
        </div>
        <div class="card-body">
            <form method="post" action="{{route('post.store')}}" enctype="multipart/form-data" >
                @csrf
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group bmd-form-group">
                        <input type="text" class="form-control" name="title" placeholder="title">
                        <span class="text-danger">@error('title'){{$message}}@enderror</span>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="form-group bmd-form-group">
                        <textarea type="text" class="form-control" name="description" placeholder="description" rows="5"></textarea>
                        <span class="text-danger">@error('description'){{$message}}@enderror</span>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="form-group bmd-form-group">
                        <input type="text" class="form-control" name="auth_name" placeholder="username" value="{{Auth::user()->name}}">
                        <span class="text-danger">@error('another_name'){{$message}}@enderror</span>
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-primary pull-right">Create Post<div class="ripple-container"></div></button>
            <div class="clearfix"></div>
            </form>

            
        </div>
    </div>
</div>
@endsection