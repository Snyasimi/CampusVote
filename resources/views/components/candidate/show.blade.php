    <!-- Let all your things have their places; let each part of your business have its time. - Benjamin Franklin -->

<x-user.layout>
    
@push('stylesheets')
    <link rel="stylesheet" href="{{asset('css/candidatePages/show.css')}}">
    @endpush

<div class="main-area">
	<h2>{{ $candidate->user->first_name }}</h2>
	<div class="banner">
		<div class="background-img" style="background-size: cover; background-position: center;background-image:url({{ Storage::url($candidate->background_image_path)}})">
			
		</div>

		<section class="candidate-media">
			<figure class="profile-img">
				<img src="{{ asset('storage/' .$candidate->profile_image_path) }}">
			</figure>
			
			<div class="candidate-details">
				<p>{{ $candidate->user->first_name}}</p>
				<p>{{ $candidate->position }}</p>
				<p>{{ $candidate->user->school }}</p>
				<p text-align="center"><i>"{{ $candidate->slogan }}"</i></p>
			</div>

		</section>
	</div>

	<div class="candidate_desc">

		<h3>About</h3>
		<p>Ooh im a hardworker etc</p>
		
	</div>

	<div class="candidate_desc">
		<h3>Manifesto</h3>
		<p>Ooh im a hardworker etc</p>
		
	</div>

</div>

</x-user.layout>
