@extends('layout')

@section('content')

<div class="card">

    <h1>Edit Member</h1>
    <p style="margin-top:10px; margin-bottom:30px;">
        Update the member information below.
    </p>

    @if($errors->any())
        <div style="
            background:#f8d7da;
            color:#721c24;
            padding:15px;
            border-radius:8px;
            margin-bottom:20px;
        ">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/members/{{ $member->id }}" method="POST">

        @csrf
        @method('PUT')

        <label>First Name</label>
        <input type="text" name="first_name" value="{{ $member->first_name }}">

        <label>Last Name</label>
        <input type="text" name="last_name" value="{{ $member->last_name }}">

        <label>Age</label>
        <input type="number" name="age" value="{{ $member->age }}">

        <label>Email</label>
        <input type="email" name="email" value="{{ $member->email }}">

        <label>Phone</label>
        <input type="text" name="phone" value="{{ $member->phone }}">

        <label>Address</label>
        <input type="text" name="address" value="{{ $member->address }}">

        <label>Professional Summary</label>
        <textarea name="professional_summary" rows="5">{{ $member->professional_summary }}</textarea>

        <button type="submit" class="btn btn-primary">
            Update Member
        </button>

        <a href="/" class="btn btn-warning">
            Cancel
        </a>

    </form>

</div>

@endsection