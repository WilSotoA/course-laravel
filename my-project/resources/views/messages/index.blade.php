@extends('layout');

@section('content')
    <h1>All messages</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Message</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($messages as $message)
                <tr>
                    <td>{{ $message->id }}</td>
                    <td>
                        <a href="{{ route('messages.show', $message->id) }}">
                            {{ $message->name }}
                        </a>
                    </td>
                    <td>{{ $message->email }}</td>
                    <td>{{ $message->message }}</td>
                    <td>
                        <a class="btn btn-info btn-xs" href="{{ route('messages.edit',$message->id) }}">Edit</a>
                        <form style="display:inline" method="POST" action="{{ route('messages.destroy',$message->id) }}">
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
