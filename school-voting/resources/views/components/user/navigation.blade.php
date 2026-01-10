    <!-- I begin to speak only when I am certain what I will say is not better left unsaid. - Cato the Younger -->

	@push('stylesheets')
    <link rel="stylesheet" href="{{asset('css/userPages/components/homepage.css')}}">
    @endpush

	

<div class="side-nav">
    
	<h2>Navigation</h2>
	<!-- Add navigation or logo here -->

    <div class="student-details">
	<h3>My details</h3>

	<div class="student-name">
	    <p><strong>Name</strong></p>
	    <p> {{ $user->first_name }}</p>
	</div>

	<div class="student-status">
	    <p><strong>Voting Status</strong></p>
	    <p>
			@if($user->vote_status == true)
				Voted
			@else
				Not voted
			@endif 
	   </p>
	</div>

    </div>


     <ul class="nav-links">
	<li><a href="{{ route('user.index') }}">Home Page</a></li>
	<li><a href="{{ route('vote.index') }}">Vote Page</a></li>
	<li><a href="{{ route('candidate.create') }}">Apply as a Candidate</a></li>
	<li>
		<form action="{{ route('logout') }}" method="POST">
		@csrf
		<button type="submit">Logout</button>
		</form>
	</li>
    </ul>
</div>
