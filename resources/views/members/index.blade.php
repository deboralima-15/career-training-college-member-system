@extends('layout')

@section('content')

<div class="card">

    <div style="display:flex; justify-content:space-between; align-items:center;">

        <div>
            <h1>Members List</h1>
            <p style="margin-top:10px;">
                View all registered members in the system.
            </p>
        </div>

        <a href="/members/create" class="btn btn-primary">
            + Add Member
        </a>

    </div>

    @if(session('success'))
        <div style="
            margin-top:20px;
            background:#d4edda;
            color:#155724;
            padding:15px;
            border-radius:8px;
        ">
            {{ session('success') }}
        </div>
    @endif

    <table>

        <thead>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Age</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Professional Summary</th>
                <th>Actions</th>
            </tr>
        </thead>

        <tbody>

            @forelse($members as $member)

                <tr>
                    <td>{{ $member->id }}</td>
                    <td>{{ $member->first_name }}</td>
                    <td>{{ $member->last_name }}</td>
                    <td>{{ $member->age }}</td>
                    <td>{{ $member->email }}</td>
                    <td>{{ $member->phone }}</td>
                    <td>{{ $member->address }}</td>
                    <td>{{ $member->professional_summary }}</td>

                    <td>
                        <div style="display:flex; gap:10px; justify-content:center; align-items:center;">

                            <a href="/members/{{ $member->id }}" class="btn btn-primary">
                                View
                            </a>

                            <a href="/members/{{ $member->id }}/edit" class="btn btn-warning">
                                Edit
                            </a>

                            <form action="/members/{{ $member->id }}" method="POST" style="margin:0;">
                                @csrf
                                @method('DELETE')

                                <button type="submit" class="btn btn-danger">
                                    Delete
                                </button>
                            </form>

                        </div>
                    </td>
                </tr>

            @empty

                <tr>
                    <td colspan="9">
                        No members found.
                    </td>
                </tr>

            @endforelse

        </tbody>

    </table>

</div>

@endsection