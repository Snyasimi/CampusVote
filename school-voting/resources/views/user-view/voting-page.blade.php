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
			<div>
			    @forelse( $data["chairPerson"] as $candidate)
				<x-candidate.card :candidate="$candidate"/>
			    @empty
				<p> Sorry, there were no candidated for this position</p>
			    @endforelse
			</div>
            
                   
                </fieldset>
                
            
                <!-- Vice-Chair Fieldset -->
                <fieldset>
              
                    <legend>Vice-Chair</legend>
            
		    <!-- Card 1 -->
		    <div>
			    @forelse( $data["viceChair"] as $candidate)
				<x-candidate.card :candidate="$candidate"/>
			    @empty
				<p> sorry, there were no candidated for this position</p>
			    @endforelse
		    </div>
            
                   
                </fieldset>
            
                <!-- Treasurer Fieldset -->
                <fieldset>
              
                    <legend>Secretary</legend>
            
		    <!-- Card 1 -->
		    <div>
			    @forelse( $data["secretary"] as $candidate)
				<x-candidate.card :candidate="$candidate"/>
			    @empty
				<p> Sorry, there were no candidated for this position</p>
			    @endforelse
                    </div>
                   
                </fieldset>

                <fieldset>
              
                    <legend>Sports and welfare</legend>
            
                    <!-- Card 1 -->
                    <div>
			    @forelse( $data["SportsAndWelfare"] as $candidate)
				<x-candidate.card :candidate="$candidate"/>
			    @empty
				<p> Sorry, there were no candidated for this position</p>
			    @endforelse
                    </div>
            
                   
                </fieldset>

                <fieldset>
              
                    <legend>Academic</legend>
            
		    <!-- Card 1 -->
		    <div>
			    @forelse( $data["academic"] as $candidate)
				<x-candidate.card :candidate="$candidate"/>
			    @empty
				<p> Sorry, there were no candidated for this position</p>
			    @endforelse
                    </div>
                   
                </fieldset>
            </form>
            
            
            
            
        </div>
        
        
        



    </main>

<footer>

    <p>&copy; 2024 Your Company</p>

</footer>

</body>
</html>
