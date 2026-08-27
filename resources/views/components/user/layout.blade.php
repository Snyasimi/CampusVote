<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home Page</title>
	@stack('stylesheets')
</head>
<body>
   
        @if(session('success'))
            <div style="background:#d4edda;color:#155724;padding:0.75rem 1.25rem;border:1px solid #c3e6cb;margin-bottom:1rem">
                {{ session('success') }}
            </div>
        @endif

        @if(session('info'))
            <div style="background:white;color:tomato;padding:0.75rem 1.25rem;border:1px solid #bee5eb; border-radius:1rem; margin-bottom:1rem; text-align:center;">
                {{ session('info') }}
            </div>
        @endif

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
