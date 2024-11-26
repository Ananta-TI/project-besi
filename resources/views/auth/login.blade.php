<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #ffffff;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-weight: bold;
        }

        .form-container {
            background: rgb(255, 255, 255);
            backdrop-filter: blur(50px);
            padding: 50px;
            border-radius: 20px;
            box-shadow: 0 0px 20px rgb(0, 0, 0);
            width: 100%;
            max-width: 400px;
        }

        .form-container h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        .form-container label {
            display: flex;
            align-items: center;
            margin-bottom: 8px;
            color: #000000;
            font-weight: bold;
        }

        .form-container input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 10px;
        }

        .form-container button {
            background-color: #4f46e5;
            color: #fff;
            padding: 15px;
            margin: 10px;
            border: none;
            border-radius: 20px;
            cursor: pointer;
            width: 100%;
            font-weight: bold;
        }

        .form-container button:hover {
            background-color: #4338ca;
        }

        .form-container a {
            color: #4f46e5;
            text-decoration: none;
            font-size: 14px;
        }

        .form-container a:hover {
            text-decoration: underline;
        }

        .form-container .remember-me {
            display: flex;
            /* align-items: center; */
            justify-content: space-between;
            font-weight: bold;
            margin: 10px
        }

        .form-container .switch-to-register {
            text-align: center;
            margin-top: 15px;
        }

        .form-container .switch-to-register a {
            color: #4f46e5;
            font-size: 14px;
        }

        .form-container .switch-to-register a:hover {
            text-decoration: underline;
        }





        .logo {
            width: 150px;
            height: 150px;
            display: flex;
            margin: auto;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>

<body>
    <div class="form-container">
        <img class="logo" src="/images/download.jpg" alt="">
        {{-- <h2>Login</h2> --}}
        @if (session('status'))
            <div class="mb-4 text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <label for="email">
                    <i class="user-icon"></i>
                    Email
                </label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus
                    autocomplete="username">
                @error('email')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div>
                <label for="password">
                    <i class="password-icon"></i>
                    Password
                </label>
                <input id="password" type="password" name="password" required autocomplete="current-password">
                @error('password')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="remember-me">
                <label for="remember_me">
                    <input id="remember_me" type="checkbox" name="remember">
                    Remember me
                </label>
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}">Forgot your password?</a>
                @endif
            </div>

            <button type="submit">Log in</button>
        </form>

        <div class="switch-to-register">
            <p>Don't have an account? <a href="{{ route('register') }}">Register here</a></p>
        </div>
    </div>
</body>

</html>
