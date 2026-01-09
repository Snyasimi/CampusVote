{{-- <!DOCTYPE html>
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

@if($user)
 <x-user.navigation :user="$user" />
@endif

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
</html> --}}


<x-user.pages.home :pageData="$data"/>