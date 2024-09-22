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
    </header>

    <main>

       
        <div class="form-container">
            <form>
                <!-- First Name and Last Name -->
                <h2>Sign up</h2>
                <div class="names">
                    <label for="first-name">First Name:
                        <input type="text" id="first-name" name="first-name" required>
                    </label>
                    

                    <label for="last-name">Last Name:
                        <input type="text" id="last-name" name="last-name" required>
                    </label>
                   
                </div>

                <div>
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>

                <!-- School -->
                <div>
                    <label for="school">School:</label>
                    <input type="text" id="school" name="school" required>
                </div>

                <!-- Registration Number -->
                <div>
                    <label for="registration-number">Registration Number:</label>
                    <input type="text" id="registration-number" name="registration-number" required>
                </div>

                <!-- Password and Confirm Password -->
                <div class="passdwd">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required>

                   
                </div>
                <div>

                    <label for="confirm-password">Confirm Password:</label>
                    <input type="password" id="confirm-password" name="confirm-password" required>

                </div>

                <!-- Buttons -->
                <div class="buttons">
                    <button type="submit">Sign Up</button>
                </div>
            </form>
        </div>
        
    </main>

    <footer>
        <p>&copy; 2024 Election System</p>
    </footer>
</body>
</html>