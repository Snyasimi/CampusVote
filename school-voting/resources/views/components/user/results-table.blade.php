    <!-- Simplicity is the essence of happiness. - Cedric Bledsoe -->

<table>
<thead>
    <tr>
	<th colspan="4" class="thead">{{ $title }}</th>
    </tr>
    <tr>
	<th>#</th>
	<th>Name</th>
	<th>School</th>
	<th>Number of Votes</th>
    </tr>
</thead>
<tbody>
	@forelse($candidates as $candidate)
    <tr>
		<td>{{ $loop->index + 1 }}</td>
		<td>{{ $candidate->user->first_name }}</td>
		<td>{{ $candidate->user->school ?? 'Computing'}}</td>
		<td>{{ $candidate->votes }}</td>
    </tr>
	@empty
    <tr>
		<td colspan="4">There were no candidates available for this position</td>
    </tr>
	@endforelse
</tbody>
</table>
