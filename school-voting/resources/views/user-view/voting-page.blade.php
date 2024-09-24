<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home Page</title>
    <link rel="stylesheet" href="{{asset('css/user-pages/voting-page.css')}}"> <!-- Link to your stylesheet -->
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

            <h3>Vote for representatives</h3>
            
                
            
            <form>
                <!-- Chairperson Fieldset -->
                <fieldset>
                    <legend>Chairperson</legend>
            
                    <!-- Card 1 -->
                    <div class="card">
                        <div class="card-button">
                            <!-- Image Div -->
                            <div class="image-container">
                                <img src="chairperson1.jpg" alt="Chairperson Candidate 1">
                            </div>
            
                            <!-- Details Div -->
                            <div class="details">
                                <p>Name: John Doe</p>
                                <p>Position: Chairperson</p>
                                <p>Slogan: "For a Better Tomorrow"</p>
                            </div>
            
                            <!-- Radio Button Label (Text Before Input) -->
                            <label>
                                Select 
                                <input type="radio" name="chairperson" value="1">
                            </label>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-button">
                            <!-- Image Div -->
                            <div class="image-container">
                                <img src="chairperson1.jpg" alt="Chairperson Candidate 1">
                            </div>
            
                            <!-- Details Div -->
                            <div class="details">
                                <p>Name: John Doe</p>
                                <p>Position: Chairperson</p>
                                <p>Slogan: "For a Better Tomorrow"</p>
                            </div>
            
                            <!-- Radio Button Label (Text Before Input) -->
                            <label>
                                Select 
                                <input type="radio" name="chairperson" value="1">
                            </label>
                        </div>
                    </div>


                    <div class="card">
                        <div class="card-button">
                            <!-- Image Div -->
                            <div class="image-container">
                                <img src="chairperson1.jpg" alt="Chairperson Candidate 1">
                            </div>
            
                            <!-- Details Div -->
                            <div class="details">
                                <p>Name: John Doe</p>
                                <p>Position: Chairperson</p>
                                <p>Slogan: "For a Better Tomorrow"</p>
                            </div>
            
                            <!-- Radio Button Label (Text Before Input) -->
                            <label>
                                Select 
                                <input type="radio" name="chairperson" value="1">
                            </label>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-button">
                            <!-- Image Div -->
                            <div class="image-container">
                                <img src="chairperson1.jpg" alt="Chairperson Candidate 1">
                            </div>
            
                            <!-- Details Div -->
                            <div class="details">
                                <p>Name: John Doe</p>
                                <p>Position: Chairperson</p>
                                <p>Slogan: "For a Better Tomorrow"</p>
                            </div>
            
                            <!-- Radio Button Label (Text Before Input) -->
                            <label>
                                Select 
                                <input type="radio" name="chairperson" value="1">
                            </label>
                        </div>
                    </div>
            
                    <!-- Card 2 -->
                    <div class="card">
                        <div class="card-button">
                            <div class="image-container">
                                <img src="chairperson2.jpg" alt="Chairperson Candidate 2">
                            </div>
            
                            <div class="details">
                                <p>Name: Jane Smith</p>
                                <p>Position: Chairperson</p>
                                <p>Slogan: "Unity for Progress"</p>
                            </div>
            
                            <label>
                                Select 
                                <input type="radio" name="chairperson" value="2">
                            </label>
                        </div>
                    </div>
            
                    <!-- Card 3 -->
                    <div class="card">
                        <div class="card-button">
                            <div class="image-container">
                                <img src="chairperson3.jpg" alt="Chairperson Candidate 3">
                            </div>
            
                            <div class="details">
                                <p>Name: Mark Johnson</p>
                                <p>Position: Chairperson</p>
                                <p>Slogan: "Leadership with Integrity"</p>
                            </div>
            
                            <label>
                                Select 
                                <input type="radio" name="chairperson" value="3">
                            </label>
                        </div>
                    </div>
                </fieldset>
            
                <!-- Vice-Chair Fieldset -->
                <fieldset>
                    <legend>Vice-Chair</legend>
            
                    <!-- Card 1 -->
                    <div class="card">
                        <div class="card-button">
                            <div class="image-container">
                                <img src="vicechair1.jpg" alt="Vice-Chair Candidate 1">
                            </div>
            
                            <div class="details">
                                <p>Name: Alice Green</p>
                                <p>Position: Vice-Chair</p>
                                <p>Slogan: "Empowering Students"</p>
                            </div>
            
                            <label>
                                Select 
                                <input type="radio" name="vice-chair" value="1">
                            </label>
                        </div>
                    </div>
            
                    <!-- Card 2 -->
                    <div class="card">
                        <div class="card-button">
                            <div class="image-container">
                                <img src="vicechair2.jpg" alt="Vice-Chair Candidate 2">
                            </div>
            
                            <div class="details">
                                <p>Name: Bob White</p>
                                <p>Position: Vice-Chair</p>
                                <p>Slogan: "Change for the Better"</p>
                            </div>
            
                            <label>
                                Select 
                                <input type="radio" name="vice-chair" value="2">
                            </label>
                        </div>
                    </div>
            
                    <!-- Card 3 -->
                    <div class="card">
                        <div class="card-button">
                            <div class="image-container">
                                <img src="vicechair3.jpg" alt="Vice-Chair Candidate 3">
                            </div>
            
                            <div class="details">
                                <p>Name: Charlie Blue</p>
                                <p>Position: Vice-Chair</p>
                                <p>Slogan: "Leading with Passion"</p>
                            </div>
            
                            <label>
                                Select 
                                <input type="radio" name="vice-chair" value="3">
                            </label>
                        </div>
                    </div>
                </fieldset>
            
                <!-- Treasurer Fieldset -->
                <fieldset>
                    <legend>Treasurer</legend>
            
                    <!-- Card 1 -->
                    <div class="card">
                        <div class="card-button">
                            <div class="image-container">
                                <img src="treasurer1.jpg" alt="Treasurer Candidate 1">
                            </div>
            
                            <div class="details">
                                <p>Name: Eve Brown</p>
                                <p>Position: Treasurer</p>
                                <p>Slogan: "Transparency and Accountability"</p>
                            </div>
            
                            <label>
                                Select 
                                <input type="radio" name="treasurer" value="1">
                            </label>
                        </div>
                    </div>
            
                    <!-- Card 2 -->
                    <div class="card">
                        <div class="card-button">
                            <div class="image-container">
                                <img src="treasurer2.jpg" alt="Treasurer Candidate 2">
                            </div>
            
                            <div class="details">
                                <p>Name: Frank Silver</p>
                                <p>Position: Treasurer</p>
                                <p>Slogan: "Securing the Future"</p>
                            </div>
            
                            <label>
                                Select 
                                <input type="radio" name="treasurer" value="2">
                            </label>
                        </div>
                    </div>
            
                    <!-- Card 3 -->
                    <div class="card">
                        <div class="card-button">
                            <div class="image-container">
                                <img src="treasurer3.jpg" alt="Treasurer Candidate 3">
                            </div>
            
                            <div class="details">
                                <p>Name: Grace Gold</p>
                                <p>Position: Treasurer</p>
                                <p>Slogan: "Responsible Leadership"</p>
                            </div>
            
                            <label>
                                Select 
                                <input type="radio" name="treasurer" value="3">
                            </label>
                        </div>
                    </div>
                </fieldset>
            
                <!-- Repeat similar structure for other positions (Secretary General, Sports and Student Welfare) -->
            </form>
            
            
            
            
        </div>
        
        
        



    </main>

<footer>

    <p>&copy; 2024 Your Company</p>

</footer>

</body>
</html>
