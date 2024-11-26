<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            /* background-image: url('/images/Home.png'); */
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
            padding: 40px;
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


    </style>
</head>
<body>
    <div class="form-container">
        <h2>Register</h2>
        <form method="POST" action="/register">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <!-- Name -->
            <div>
                <label for="name">Name</label>
                <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus autocomplete="name">
                <span class="error-message">@error('name'){{ $message }}@enderror</span>
            </div>

            <!-- Email Address -->
            <div>
                <label for="email">Email</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="username">
                <span class="error-message">@error('email'){{ $message }}@enderror</span>
            </div>

            <!-- Password -->
            <div>
                <label for="password">Password</label>
                <input id="password" type="password" name="password" required autocomplete="new-password">
                <span class="error-message">@error('password'){{ $message }}@enderror</span>
            </div>

            <!-- Confirm Password -->
            <div>
                <label for="password_confirmation">Confirm Password</label>
                <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password">
                <span class="error-message">@error('password_confirmation'){{ $message }}@enderror</span>
            </div>

            <!-- Actions -->
            <div class="form-actions">
                <a href="/login">Already registered?</a>

                <button type="submit">Register</button>
            </div>
        </form>
    </div>
</body>
</html>
