<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration Successful</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(to right, #0f2027, #203a43, #2c5364);
            color: #fff;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .success-card {
            background-color: #ffffff15;
            padding: 40px 30px;
            border-radius: 20px;
            text-align: center;
            max-width: 450px;
            width: 100%;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.3);
        }

        .success-card h1 {
            font-size: 2rem;
            margin-bottom: 15px;
            color: #ffc107;
        }

        .success-card h4 {
            font-size: 1rem;
            color: #ddd;
            margin: 10px 0;
        }

        .success-card .highlight {
            color: #00e6e6;
            font-weight: bold;
        }

        .btn {
            margin-top: 30px;
            display: inline-block;
            background: #deff10;
            color: white;
            padding: 12px 25px;
            text-decoration: none;
            border-radius: 8px;
            font-weight: 600;
            transition: background 0.3s;
        }

        .btn:hover {
            background:rgb(90, 100, 99);
        }
    </style>
</head>
<body>

    <div class="success-card">
        @if(session()->has('messages'))
            @php
                $user = session('messages');
            @endphp

            <h1>🎉 Registration Successful!</h1>
            <h4>Welcome, <span class="highlight">{{ $user->name }}</span></h4>
            <h4>Your Username: <span class="highlight">{{ $user->username }}</span></h4>
            <h4>Your Password: <span class="highlight">{{ $user->PSR }}</span></h4> and your transaction password : {{ $user->TPSR }}
            <h4>Please check your email for full details.</h4>

            <a href="{{ route('login') }}" class="btn">Sign In</a>
        @else
            <h1>⚠️ No data found</h1>
        @endif
    </div>

</body>
</html>
