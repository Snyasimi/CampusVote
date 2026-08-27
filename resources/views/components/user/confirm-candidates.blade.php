    <!-- Order your soul. Reduce your wants. - Augustine -->

<x-user.layout>

    @push('stylesheets')
    <link rel="stylesheet" href="{{asset('css/userPages/components/confirm-candidates.css')}}">
    @endpush

    <div class="main-area">
	
	<h3>My selected candidates</h3>
	<div class="candidates-display">
		<div>
			<-candidate.candidate-display-card :candidate="$candidates['chairperson']" />		
		</div>
	</div>
	
    </div>

</x-user.layout>
