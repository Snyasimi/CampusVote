<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home Page</title>
    <link rel="stylesheet" href="{{asset('css/user-pages/home-page.css')}}"> <!-- Link to your stylesheet -->
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

            <h3>Top results</h3>
                
            
            
            <div class="table-container">

                

                <div class="position">
                    <table>
                        <thead>
                            <tr>
                                <th colspan="5" class="thead">Chairperson</th>
                            </tr>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>School</th>
                                <th>Number of Votes</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>John Doe</td>
                                <td>School A</td>
                                <td>1500</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Jane Smith</td>
                                <td>School B</td>
                                <td>1450</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Emily Johnson</td>
                                <td>School C</td>
                                <td>1400</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Michael Brown</td>
                                <td>School D</td>
                                <td>1350</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            
                <!-- Vice-Chair Table -->
                <div class="position">
                    <table >
                        <thead>
                            <tr>
                                <th colspan="5" class="thead">Vice-Chair</th>
                            </tr>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>School</th>
                                <th>Number of Votes</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>David White</td>
                                <td>School E</td>
                                <td>1400</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Susan Black</td>
                                <td>School F</td>
                                <td>1350</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Tom Green</td>
                                <td>School G</td>
                                <td>1300</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Sarah Lee</td>
                                <td>School H</td>
                                <td>1250</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            
                <!-- Treasurer Table -->
                <div class="position">
                    <table >
                        <thead>
                            <tr>
                                <th colspan="5" class="thead">Treasurer</th>
                            </tr>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>School</th>
                                <th>Number of Votes</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Anna Grey</td>
                                <td>School I</td>
                                <td>1200</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Mark Yellow</td>
                                <td>School J</td>
                                <td>1150</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Lily Pink</td>
                                <td>School K</td>
                                <td>1100</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Oscar Blue</td>
                                <td>School L</td>
                                <td>1050</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        
            <!-- Secretary General, Sports, and Student Welfare would follow the same structure -->
        </div>
        
        
        



    </main>

<footer>

    <p>&copy; 2024 Your Company</p>

</footer>

</body>
</html>
