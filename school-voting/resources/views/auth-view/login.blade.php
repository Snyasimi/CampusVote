<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login Page</title>
    <link rel="stylesheet" href="{{ asset('css/auth-pages/login-page.css')}}"> 
</head>
<body>
    <header>
        <h1>Mku e-polling</h1>
        <!-- Add navigation or logo here -->
        <a href="login">Sign up</a>
    </header>

    <main>
        <div class="login-form">
            
            <form action="login_process.php" method="post">
                <h2>Please Log In</h2>
                <div>
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>

               <div>

                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>

               </div>

                <div>
                    <button type="submit">Login</button>
                </div>
                
                
                
                <p>Click Here to Sign up</p>
            </form>

            
        </div>
    </main>

    <footer>
        <p>&copy; Mount Kenya University</p>
    </footer>
</body>
</html>