@extends('layout')

@section('content')

<div class="card">

    <h1>Add New Member</h1>

    <p style="margin-top:10px; margin-bottom:30px;">
        Fill in the form below to register a new member.
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

    <form action="/members" method="POST">

        @csrf

        <label>First Name</label>
        <input type="text" name="first_name">

        <label>Last Name</label>
        <input type="text" name="last_name">

        <label>Age</label>
        <input type="number" name="age">

        <label>Email</label>
        <input type="email" name="email">

        <label>Phone</label>
        <input type="text" name="phone">

        <label>Address</label>
        <input type="text" name="address">

        <label>Professional Summary</label>
        <textarea name="professional_summary" rows="5"></textarea>

        <button type="submit" class="btn btn-primary">
            Save Member
        </button>

    </form>

</div>

@endsection