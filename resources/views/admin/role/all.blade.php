@extends('layouts.admin')
@section('content')
<div class="card">
    <div class="card-header card-header-primary">
        <h4 class="card-title ">Role Table</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                <thead class=" text-primary">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Created_at</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($roles as $role)
                    <tr>
                        <td>1</td>
                        <td>{{$role->name}}</td>
                        <td>{{$role->created_at->diffForHumans()}}</td>
                        <td>
                            <a href="{{route('role.show',$role->id)}}" class="btn btn-info">Show</a>
                            <a href="{{route('role.edit',$role->id)}}" class="btn btn-warning">Edit</a>
                            {{-- <a href="{{route('user.delete',$user->id)}}" class="btn btn-danger">Delete</a> --}}

                            <form method="post" action="{{route('role.destroy',$role->id)}}" class="pull-right">
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
        <a href="{{route('role.create')}}" class="btn btn-primary pull-left">Add Role<div class="ripple-container"></div></a>
</div>
@endsection