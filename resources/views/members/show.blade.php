@extends('layout')

@section('content')

<div class="card">

    <h1>Member Details</h1>
    <p>Detailed information about the selected member.</p>

    <div style="
        display:flex;
        gap:60px;
        align-items:flex-start;
        margin-top:40px;
        flex-wrap:wrap;
    ">

        <!-- LEFT SIDE -->
        <div style="
            width:250px;
            text-align:center;
        ">

            <div style="
                width:160px;
                height:160px;
                border-radius:50%;
                background:#e5e7eb;
                margin:auto;
                display:flex;
                justify-content:center;
                align-items:center;
            ">

                <div style="
                    width:90px;
                    height:90px;
                    background:#6b7280;
                    border-radius:50%;
                ">
                </div>

            </div>

            <h2 style="margin-top:20px;">
                {{ $member->first_name }} {{ $member->last_name }}
            </h2>

            <p style="color:gray;">
                {{ $member->professional_summary }}
            </p>

        </div>

        <!-- RIGHT SIDE -->
        <div style="flex:1;">

            <table style="
                width:100%;
                border-collapse:collapse;
            ">

                <tr>
                    <td style="padding:15px; font-weight:bold;">ID</td>
                    <td>{{ $member->id }}</td>
                </tr>

                <tr>
                    <td style="padding:15px; font-weight:bold;">First Name</td>
                    <td>{{ $member->first_name }}</td>
                </tr>

                <tr>
                    <td style="padding:15px; font-weight:bold;">Last Name</td>
                    <td>{{ $member->last_name }}</td>
                </tr>

                <tr>
                    <td style="padding:15px; font-weight:bold;">Age</td>
                    <td>{{ $member->age }}</td>
                </tr>

                <tr>
                    <td style="padding:15px; font-weight:bold;">Email</td>
                    <td>{{ $member->email }}</td>
                </tr>

                <tr>
                    <td style="padding:15px; font-weight:bold;">Phone</td>
                    <td>{{ $member->phone }}</td>
                </tr>

                <tr>
                    <td style="padding:15px; font-weight:bold;">Address</td>
                    <td>{{ $member->address }}</td>
                </tr>

                <tr>
                    <td style="padding:15px; font-weight:bold;">Professional Summary</td>
                    <td>{{ $member->professional_summary }}</td>
                </tr>

            </table>

        </div>

    </div>

   <a href="/home" class="btn btn-primary" style="margin-top:30px;">
    Back
</a>

</div>

@endsection