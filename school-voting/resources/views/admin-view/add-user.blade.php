<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home Page</title>
    <link rel="stylesheet" href="{{ asset('css/admin-pages/add-user.css')}}"> <!-- Link to your stylesheet -->
</head>
<body>
    <main>
        <div class="side-nav">
            

                <header>
                    <h2>Navigation</h2>
                </header>

                <ul class="main-link">
                    <li><a href="home.html">> Home</a></li>

                    <li><span class="sub-link-header"> Candidates</span>
                        <ul class="sub-link">
                            <li><a href="applications.html">Applications</a></li>
                            <li><a href="all_candidates.html">All Candidates</a></li>
                        </ul>
                    </li>
                    <li><span class="sub-link-header"> Positions</span>
                        <ul class="sub-link">
                            <li><a href="add_position.html">Add Position</a></li>
                            <li><a href="view_positions.html">View Positions</a></li>
                        </ul>
                    </li>
                    <li><span class="sub-link-header"> Users</span>
                        <ul class="sub-link">
                            <li><a href="add_user.html">Add User</a></li>
                            <li><a href="view_user.html">View Users</a></li>
                        </ul>
                    </li>
                </ul>

                <li class="logout-btn" ><a href="home.html">Log out</a></li>
            
            
        </div>

        <div class="main-area">
            <h2>Add a new user</h2>
            <form>
                <!-- First Name and Last Name -->
                
                <div class="names">
                    <label for="first-name">First Name:
                        <input type="text" id="first-name" name="first-name" required>
                    </label>
                    

                    <label for="last-name">Last Name:
                        <input type="text" id="last-name" name="last-name" required>
                    </label>
                   
                </div>

                <fieldset>
                    <legend>Admin Status</legend>
                
                    <!-- Label and Input 1 -->
                    <label>
                        Admin
                        <input type="radio" name="is-admin" value="yes">
                    </label>
                
                    <!-- Label and Input 2 -->
                    <label>
                        Not Admin
                        <input type="radio" name="is-admin" value="no" checked>
                    </label>
                </fieldset>

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
                    <label for="registration-number">Staff ID: or Registration Number: </label>
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
        <p>&copy; 2024 Your Company</p>
    </footer>
</body>
</html>
