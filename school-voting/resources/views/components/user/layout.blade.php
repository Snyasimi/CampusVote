<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home Page</title>
    <link rel="stylesheet" href="{{asset('css/user-pages/home-page.css')}}"> <!-- Link to your stylesheet -->
	@stack('stylesheets')
</head>
<body>
   

    <main>

        @if(auth()->check())
  	
                <x-user.navigation :user="auth()->user()" />
	
        @endif

	{{-- Please Let each component push its own styling on the style stack, each component comes with a class called main-area --}}
    	{{ $slot }}

    </main>


<footer>

    <p>&copy; 2024 Your Company</p>

</footer>

</body>
</html>
