  <!-- It is not the man who has too little, but the man who craves more, that is poor. - Seneca -->

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
        <label>
            Select 
            <input type="radio" name="{{ $candidate->position}}" value="{{ $candidate->id }}">
        </label>
    </div>
</div>
