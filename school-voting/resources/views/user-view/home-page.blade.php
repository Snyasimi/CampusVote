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
			<x-user.results-table title="Chairperson" :candidates="$data['Chairperson']"/>
                </div>
            
                <!-- Vice-Chair Table -->
		<div class="position">
			<x-user.results-table title="ViceChair" :candidates="$data['Vicechair']"/>
                </div>
            
                <!-- Treasurer Table -->
		<div class="position">
			<x-user.results-table title="secretary" :candidates="$data['Secretary']"/>
		</div>

		<div class="position">
			<x-user.results-table title="Sports and Welfare" :candidates="$data['Sports and welfare']"/>
		</div>

		<div class="position">
			<x-user.results-table title="Academic" :candidates="$data['Academic']"/>
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
