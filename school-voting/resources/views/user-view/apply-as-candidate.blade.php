<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home Page</title>
    <link rel="stylesheet" href="{{asset('css/user-pages/apply-page.css')}}"> <!-- Link to your stylesheet -->
</head>
<body>
   

    <main>

        <div class="side-nav">
            
                <h2>Navigation</h2>
                <!-- Add navigation or logo here -->
        

            <div class="student-details">
                <h3>My details</h3>

                <div class="student-name">
                    <p><strong>Name</strong></p>
                    <p> Bian Otieno</p>
                </div>

                <div class="student-status">
                    <p><strong>Voting Status</strong></p>
                    <p> Not Voted</p>
                </div>

            </div>

            <ul>
                <li><a href="vote.html">Vote Page</a></li>
                <li><a href="apply.html">Apply as a Candidate</a></li>
                <li><a href="logout.html" class="logout-button">Logout</a></li>
            </ul>
        </div>

        <div class="main-area">
            <!-- Chairperson Table -->

            <header>
                <h2>Mku e-polling</h2>
            </header>

            <h3>Apply as a Candidate</h3>
            
                
            
                <form>
                    <!-- Position -->
                    
                    <label for="position">
                      <p>  Position:</p>
                        <select id="position" name="position" required>
                            <option value="chairperson">Chairperson</option>
                            <option value="vice-chair">Vice-Chair</option>
                            <option value="treasurer">Treasurer</option>
                            <option value="secretary-general">Secretary General</option>
                            <option value="sports-and-welfare">Sports and Student Welfare</option>
                        </select>
                    </label>
            
                    <!-- Application Form (File Input) -->
                    <label for="application-form">
                        <p>Application Form:</P>
                        <input type="file" id="application-form" name="application-form" required>
                    </label>
            
                    <!-- Slogan -->
                    <label for="slogan">
                        <p>Slogan:</p>
                        <input type="text" id="slogan" name="slogan" required>
                    </label>
            
                    <!-- Submit Button -->
                    <div class="buttons">
                        <button type="submit">Submit</button>
                    </div>
                </form>
            
        </div>
        
        
        



    </main>

<footer>

    <p>&copy; 2024 Your Company</p>

</footer>

</body>
</html>
