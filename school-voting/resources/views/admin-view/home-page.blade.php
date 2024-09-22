<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home Page</title>
    <link rel="stylesheet" href="{{ asset('css/admin-pages/home-page.css')}}"> <!-- Link to your stylesheet -->
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
            <header>
                <h2>Top statistics</h2>
                <!-- Add navigation or logo here -->
            </header>

            <div class="info-banner">
                <div class="banner">
                    <h2>Total Candidates</h2>
                    <p>326</p>
                </div>
                <div class="banner">
                    <h2>Total Voters</h2>
                    <p>326</p>
                </div>
                <div class="banner">
                    
                    <h2>Total Users</h2>
                    <p>326</p>

                </div>
            </div>
        

            <div>
                <h2>Top 3 Candidates</h2>

            <div class="top-results">
                <!-- Chairperson -->
                
                <div class="position">
                    <table >
                        <thead>
                            <tr>
                                <th  class="thead" colspan="5">Chairperson</th>
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
                               
                                <td>John Doe</td>
                                <td>School A</td>
                                <td>1500</td>
                            </tr>

                            <tr>
                                <td>3</td>
                               
                                <td>John Doe</td>
                                <td>School A</td>
                                <td>1500</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            
                <!-- Vice-Chair -->
                <div class="position">
                    <table "">
                        <thead>
                            <tr>
                                <th class="thead" colspan="5">Vice-Chair</th>
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
                               
                                <td>Jane Smith</td>
                                <td>School B</td>
                                <td>1400</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            
                <!-- Treasurer -->
                <div class="position">
                    <table "">
                        <thead>
                            <tr>
                                <th class="thead" colspan="5">Treasurer</th>
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
                               
                                <td>Michael Brown</td>
                                <td>School C</td>
                                <td>1300</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            
                <!-- Secretary General -->
                <div class="position">
                    <table >
                        <thead>
                            <tr>
                                <th class="thead" colspan="5">Secretary General</th>
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
                                
                                <td>Emily Johnson</td>
                                <td>School D</td>
                                <td>1250</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            
                <!-- Sports -->
                <div class="position">
                    <table "">
                        <thead>
                            <tr>
                                <th class="thead" colspan="5">Sports</th>
                            </tr>
                            <tr>
                                <th>#</th>
                                <th>Position</th>
                                <th>Name</th>
                                <th>School</th>
                                <th>Number of Votes</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Sports</td>
                                <td>David White</td>
                                <td>School E</td>
                                <td>1200</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            
                <!-- Student Welfare -->
                <div class="position">
                    <table "">
                        <thead>
                            <tr>
                                <th class="thead" colspan="5">Student Welfare</th>
                            </tr>
                            <tr>
                                <th>#</th>
                                <th>Position</th>
                                <th>Name</th>
                                <th>School</th>
                                <th>Number of Votes</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Student Welfare</td>
                                <td>Sarah Lee</td>
                                <td>School F</td>
                                <td>1100</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            </div>
            
        </div>
    </main>

    <footer>
        <p>&copy; 2024 Your Company</p>
    </footer>
</body>
</html>
