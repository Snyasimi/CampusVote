    <!-- No surplus words or unnecessary actions. - Marcus Aurelius -->

<div class="card">

    <div class="card-button">
        <div class="image-container">
            <img src="{{ asset('storage/'.$candidate->profile_image_path) }}" alt="Candidate Image">
        </div>
        <div class="details">
            <p>Name: {{ $candidate->user->first_name }}</p>
            <p>Position: {{ $candidate->position  }}</p>
            <p>Slogan: "{{ $candidate->slogan }} "</p>
        </div>
    </div>
</div>
