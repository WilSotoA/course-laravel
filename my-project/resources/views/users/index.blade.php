@extends('layout')

@section('content')
    <h1>Users</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        @foreach ($user->roles as $role)
                            {{ $role->display_name }}
                        @endforeach
                    </td>
                    <td>
                        <a class="btn btn-info btn-xs" href="{{ route('users.edit',$user->id) }}">Edit</a>
                        <form style="display:inline" method="POST" action="{{ route('users.destroy',$user->id) }}">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-xs" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
