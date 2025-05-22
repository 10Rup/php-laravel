@extends('layouts.app')

@section('content')
    <h1>Job Applications</h1>
    <a href="{{ route('applications.create') }}">Add New Application</a>

    <table>
        <thead>
            <tr>
                <th>Company</th>
                <th>Role</th>
                <th>Status</th>
                <th>Applied Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($applications as $app)
                <tr>
                    <td>{{ $app->company_name }}</td>
                    <td>{{ $app->role }}</td>
                    <td>{{ $app->status }}</td>
                    <td>{{ $app->applied_date }}</td>
                    <td>
                        <a href="{{ route('applications.edit', $app->id) }}">Edit</a>
                        <form action="{{ route('applications.destroy', $app->id) }}" method="POST" style="display:inline">
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