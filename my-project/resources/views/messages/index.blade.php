@extends('layout');

@section('content')
    <h1>All messages</h1>
    <table width="100%" border="1px solid">
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
                        <a href="{{ route('mensajes.show', $message->id) }}">
                            {{ $message->name }}
                        </a>
                    </td>
                    <td>{{ $message->email }}</td>
                    <td>{{ $message->message }}</td>
                    <td>
                        <a href="{{ route('mensajes.edit',$message->id) }}">Edit</a>
                        <form style="display:inline" method="POST" action="{{ route('mensajes.destroy',$message->id) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
