@extends('layouts.admin')
@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="card-header card-header-primary">
            <h4 class="card-title">Edit Post</h4>
        </div>
        <div class="card-body">
            <form method="post" action="{{route('post.update'  , $post->id)}}">
                @csrf
                @method('PUT')
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group bmd-form-group">
                        <input type="text" class="form-control" name="title" value="{{$post->title}}">
                        {{-- <span class="text-danger">@error('name'){{$message}}@enderror</span> --}}
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="form-group bmd-form-group">
                        <input type="text" class="form-control" name="description" value="{{$post->description}}">
                        {{-- <span class="text-danger">@error('name'){{$message}}@enderror</span> --}}
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="form-group bmd-form-group">
                        <input type="text" class="form-control" name="another_name" value="{{$post->another_name}}">
                        {{-- <span class="text-danger">@error('name'){{$message}}@enderror</span> --}}
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