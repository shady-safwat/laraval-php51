@extends('layouts.admin')
@section('content')
<div class="card">
    <div class="card-header card-header-primary">
        <h4 class="card-title ">Post Table</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                <thead class=" text-primary">
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Username</th>
                        <th>Created_at</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    
                    @foreach ($posts as $post)
                    <tr>
                        <td>{{$post->id}}</td>
                        <td>{{$post->title}}</td>
                        <td>{{$post->description}}</td>
                        <td>{{$post->auth_name}}</td>
                        <td>{{ \Carbon\Carbon::parse($post->created_at)->diffForHumans() }}</td>
                        <td>
                            <a href="{{route('post.show',$post->id)}}" class="btn btn-info">Show</a>
                            <a href="{{route('post.edit',$post->id)}}" class="btn btn-warning">Edit</a>
                            {{-- <a href="{{route('user.delete',$user->id)}}" class="btn btn-danger">Delete</a> --}}

                            <form method="post" action="{{route('post.destroy',$post->id)}}" class="pull-right">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="Delete" class="btn btn-danger">
                            </form>
                        </td>
                    </tr>
                    @endforeach
                
                    
                </tbody>
                </table>
                {{-- url('admin/user/create') --}}
            </div>
        </div>
    </div>
        <a href="{{route('post.create')}}" class="btn btn-primary pull-left">Add Post<div class="ripple-container"></div></a>
</div>
@endsection