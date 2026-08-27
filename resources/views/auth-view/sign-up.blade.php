<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="{{ asset('css/auth-pages/sign-up-page.css')}}">
</head>
<body>
    <header>
        <h1>Mku e-polling</h1>

        <a href="login">Login</a>

    </header>

    <main>

       
        <div class="form-container">
            <form method="POST" action="{{ route('registerUser') }}">
                @csrf
            
                <!-- First Name and Last Name -->
                <h2>Sign up</h2>
                <div class="names">
                    <label for="first-name">First Name:
                        <input type="text" id="first_name" name="first_name" value="{{ old('first_name') }}" required>
                    </label>
                    @if($errors->has('first_name'))
                        <div class="error">{{ $errors->first('first_name') }}</div>
                    @endif
            
                    <label for="last-name">Last Name:
                        <input type="text" id="last_name" name="last_name" value="{{ old('last_name') }}" required>
                    </label>
                    @if($errors->has('last_name'))
                        <div class="error">{{ $errors->first('last_name') }}</div>
                    @endif
                </div>
            
                <div>
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" value="{{ old('email') }}" required>
                    @if($errors->has('email'))
                        <div class="error">{{ $errors->first('email') }}</div>
                    @endif
                </div>
            
                <div>
                    <label for="phone_number">Phone Number:</label>
                    <input type="text" id="phone_number" name="phone_number" value="{{ old('phone_number') }}" required>
                    @if($errors->has('phone_number'))
                        <div class="error">{{ $errors->first('phone_number') }}</div>
                    @endif
                </div>
            
                <div>
                    <label for="school">School / Faculty:</label>
                    <input type="text" id="school" name="school" value="{{ old('school') }}" required>
                    @if($errors->has('school'))
                        <div class="error">{{ $errors->first('school') }}</div>
                    @endif
                </div>

                <div>
                    <label for="role_number">Registration Number:</label>
                    <input type="text" id="role_number" name="role_number" value="{{ old('role_number') }}" required>
                    @if($errors->has('role_number'))
                        <div class="error">{{ $errors->first('role_number') }}</div>
                    @endif
                </div>
            
                <div class="password">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required>
                    @if($errors->has('password'))
                        <div class="error">{{ $errors->first('password') }}</div>
                    @endif
                </div>
            
                <div>
                    <label for="confirm_password">Confirm Password:</label>
                    <input type="password" id="confirm_password" name="confirm_password" required>
                    @if($errors->has('confirm_password'))
                        <div class="error">{{ $errors->first('confirm_password') }}</div>
                    @endif
                </div>
            
                <div class="buttons">
                    <button type="submit">Sign Up</button>
                </div>
            
                <!-- Optional: Global errors block -->
                @if($errors->any())
                    <div class="errors">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </form>
            
        </div>
        
    </main>

    <footer>
        <p>&copy; 2024 Election System</p>
    </footer>
</body>
</html>
