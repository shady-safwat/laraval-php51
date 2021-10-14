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
                        <th>email</th>
                        <th>Created_at</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr>
                        <th></th>
                        <th>{{$user->user->name}}</th>
                        <td></td>
                        <td></td>
                        <td>
                            <a href="{{route('user.show',$user->id)}}" class="btn btn-info">Show</a>
                            <a href="{{route('user.edit',$user->id)}}" class="btn btn-warning">Edit</a>
                            {{-- <a href="{{route('user.delete',$user->id)}}" class="btn btn-danger">Delete</a> --}}

                            <form method="post" action="{{route('user.destroy',$user->id)}}" class="pull-right">
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
