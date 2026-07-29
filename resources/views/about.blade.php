@extends('layout')

@section('content')

<div class="card">

    <div style="
        display:flex;
        justify-content:space-between;
        align-items:center;
        gap:40px;
        flex-wrap:wrap;
    ">

        <!-- LEFT SIDE -->
        <div style="flex:1; min-width:300px;">

            <h1 style="
                font-size:42px;
                margin-bottom:20px;
                color:#1f2d50;
            ">
                About Career Training College
            </h1>

            <p style="
                line-height:1.8;
                color:#555;
                font-size:18px;
            ">
                Career Training College is a modern educational institution focused on
                providing high quality training and professional development opportunities
                for students across Australia.
            </p>

            <p style="
                line-height:1.8;
                color:#555;
                font-size:18px;
                margin-top:20px;
            ">
                Our mission is to help students build practical skills, gain industry
                knowledge, and prepare for successful careers in Information Technology,
                Business, and other professional areas.
            </p>

        </div>

        <!-- RIGHT SIDE -->
        <div style="
            width:320px;
            text-align:center;
        ">

            <div style="
                background:#1f2d50;
                border-radius:20px;
                padding:50px 30px;
                color:white;
                box-shadow:0 8px 20px rgba(0,0,0,0.1);
            ">

                <h2 style="margin-bottom:20px;">
                    Contact Information
                </h2>

                <p style="margin-bottom:15px;">
                    📍 Perth, Western Australia
                </p>

                <p style="margin-bottom:15px;">
                    📞 +61 8 9000 0000
                </p>

                <p style="margin-bottom:15px;">
                    ✉ info@ctc.edu.au
                </p>

                <p>
                    🌐 www.ctc.edu.au
                </p>

            </div>

        </div>

    </div>

</div>

@endsection