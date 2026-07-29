@extends('layout')

@section('content')

<div class="card" style="max-width:500px; margin:80px auto;">

    <h1 style="text-align:center;">Login</h1>

    <p style="text-align:center; margin-top:10px; margin-bottom:30px;">
        Please login to access the member record system.
    </p>

    <form action="/login" method="POST">

        @csrf

        <label>Email</label>
        <input type="email" name="email" placeholder="admin@ctc.edu.au" required>

        <label>Password</label>
        <input type="password" name="password" placeholder="Enter password" required>

        <button type="submit" class="btn btn-primary" style="width:100%;">
            Login
        </button>

    </form>

</div>

@endsection