@extends('layouts.admin')
@section('content')
<div class="card">
    <div class="card-header card-header-primary">
        <h4 class="card-title ">Simple Table</h4>
        <p class="card-category"> Here is a subtitle for this table</p>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                <thead class=" text-primary">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Created_at</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr>
                        <td>1</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{ \Carbon\Carbon::parse($user->created_at)->diffForHumans() }}</td>
                        <td>
                            <a href="{{route('user.show',$user->id)}}" class="btn btn-info">Show</a>
                            <a href="{{route('user.edit',$user->id)}}" class="btn btn-warning">Edit</a>
                            {{-- <a href="{{route('user.delete',$user->id)}}" class="btn btn-danger">Delete</a> --}}

                            <form method="post" action="{{route('user.destroy',$user->id)}}" class="pull-right">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="Delete" class="btn btn-danger">
                            </form>
                            <a href="{{ route('post.index',$user->id) }}" class="btn btn-blue">Post</a>
                        </td>
                    </tr>
                    @endforeach
                
                    
                </tbody>
                </table>
                {{-- url('admin/user/create') --}}
            </div>
        </div>
    </div>
        <a href="{{route('user.create')}}" class="btn btn-primary pull-left">Add User<div class="ripple-container"></div></a>
</div>
@endsection