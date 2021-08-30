@extends('layouts.admin')
@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="card-header card-header-primary">
            <h4 class="card-title">Show post</h4>
        </div>
        <div class="card-body">
            <form method="" action="">
                @csrf
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group bmd-form-group">
                        <input type="text" class="form-control" name="title" value="{{$post->title}}">
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group bmd-form-group">
                        <input type="email" class="form-control" name="description" value="{{$post->description}}">
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group bmd-form-group">
                    <input type="email" class="form-control" name="another_name" value="{{$post->auth_name}}">
                </div>
            </div>
    
            <a type="submit" class="btn btn-primary pull-right" href="{{route('post.index')}}">Back</a>
            <div class="clearfix"></div>
            </form>
        </div>
    </div>
</div>
@endsection