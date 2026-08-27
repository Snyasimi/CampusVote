    <!-- People find pleasure in different ways. I find it in keeping my mind clear. - Marcus Aurelius -->


<main>

	
	<h2> 
			Voting page
	</h2>

	<div>

			<form>
				
				<fieldset>
						<legend>Chairperson</legend>
				
						@foreach($candiates["chairpersons"] as $chairperson)
							<x-candidate.card :candidate="$chairperson" />
						@empty
							<p>There are no candidates for this position
						#endforelse 
				</fieldset>


				<fieldset>
						<legend>Chairperson</legend>
				
						@foreach($candidates["viceChairpersons"] as $viceChairperson)
							<x-candidate.card :candidate="$viceChairperson" />
						@empty
							<p>There are no candidates for this position
						#endforelse 
				</fieldset>

				<fieldset>
						<legend>Academic Secretary</legend>
				
						@foreach($candidates["academicSecretary"] as $academicsec)
							<x-candidate.card :candidate="$academicsec" />
						@empty
							<p>There are no candidates for this position
						@endforelse 
				</fieldset>

				<fieldset>
						<legend>Sports and welfare</legend>
				
						@foreach($candidates["sportsAndWelfare"] as $academicsec)
							<x-candidate.card :candidate="$academicsec" />
						@empty
							<p>There are no candidates for this position
						#endforelse 
				</fieldset>


		
			</form>
		
	</div>

</main>
