<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Career Training College</title>

    <style>

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family: Arial, Helvetica, sans-serif;
        }

        body{
    background-color:#f4f6f9;
    color:#333;
    min-height:100vh;
    display:flex;
    flex-direction:column;
    }

        /* NAVBAR */

        nav{
            background-color:#1e2a44;
            padding:18px 40px;
            display:flex;
            justify-content:space-between;
            align-items:center;
        }

        .logo{
            display:flex;
            align-items:center;
            gap:15px;
            color:white;
            font-size:24px;
            font-weight:bold;
        }

        .logo-box{
            width:45px;
            height:45px;
            background:#f4b400;
            border-radius:8px;
        }

        nav ul{
            display:flex;
            list-style:none;
            gap:25px;
        }

        nav ul li a{
            color:white;
            text-decoration:none;
            font-weight:bold;
            transition:0.3s;
        }

        nav ul li a:hover{
            color:#f4b400;
        }

        /* CONTENT */

        .container{
    width:90%;
    max-width:1200px;
    margin:40px auto;
    flex:1;
    }

        /* CARDS */

        .card{
            background:white;
            padding:30px;
            border-radius:12px;
            box-shadow:0 2px 10px rgba(0,0,0,0.1);
        }

        /* BUTTONS */

        .btn{
            padding:10px 18px;
            border:none;
            border-radius:8px;
            cursor:pointer;
            text-decoration:none;
            font-weight:bold;
            display:inline-block;
        }

        .btn-primary{
            background:#1e2a44;
            color:white;
        }

        .btn-warning{
            background:#f4b400;
            color:black;
        }

        .btn-danger{
            background:#d9534f;
            color:white;
        }

        /* TABLE */

        table{
            width:100%;
            border-collapse:collapse;
            margin-top:20px;
        }

        table th{
            background:#1e2a44;
            color:white;
            padding:15px;
        }

        table td{
            padding:15px;
            border-bottom:1px solid #ddd;
            vertical-align: middle;
        
        }

        /* FORM */

        form input,
        form textarea{
            width:100%;
            padding:12px;
            margin-top:10px;
            margin-bottom:20px;
            border:1px solid #ccc;
            border-radius:8px;
        }

        /* FOOTER */

        footer{
            margin-top:40px;
            background:#1e2a44;
            color:white;
            text-align:center;
            padding:12px 25px;
        }

    </style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>

    <nav>

        <div class="logo">
            <img src="{{ asset('images/ctc-logo.png.jpeg') }}" alt="Career Training College Logo" style="height:60px;">
<span>Career Training College</span>
        </div>

        <ul>
            <li><a href="/home">Home</a></li>
            <li><a href="/members/create">Add Member</a></li>
            <li><a href="/about">About Us</a></li>
        </ul>

    </nav>

    <div class="container">
        @yield('content')
    </div>

    <footer>

    <p>© 2026 Career Training College. All rights reserved.</p>

    <p>
        Perth, WA 6000 |
        Contact: info@ctc.edu.au
    </p>

    <div style="
    margin-top:15px;
    display:flex;
    justify-content:flex-end;
    gap:15px;
    font-size:28px;
">

    <i class="fab fa-facebook-square"></i>

    <i class="fab fa-instagram"></i>

    <i class="fab fa-linkedin"></i>

</div>

</footer>

</body>
</html>