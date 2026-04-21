
    <!-- Let all your things have their places; let each part of your business have its time. - Benjamin Franklin -->

@push('stylesheets')
	<link rel="stylesheet" href="{{asset('css/candidatePages/components/applicationForm.css')}}"
@endpush

<x-user.layout>

<div class="main-area">

    <form action="{{ route('candidate.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <h2>Candidate Application Form</h2>
        
        <!-- Position -->
        <div>
            <label for="position">Position:</label>
            <select id="position" name="position" required>
                <option value="">Select Position</option>
                <option value="Chairperson">Chairperson</option>
                <option value="Vice-Chair">Vice-Chair</option>
                <option value="Treasurer">Treasurer</option>
                <option value="Secretary General">Secretary General</option>
                <option value="Sports and Welfare">Sports and Student Welfare</option>
            </select>
            @error('position') <!-- Cleaner Blade directive for error handling -->
                <span style="color: red;">{{ $message }}</span>
            @enderror
        </div>
    
        <!-- Profile Image -->
        <div>
            <label for="profile_image">Profile Image:</label>
            
            <!-- Div for Image Preview --> 
            <div id="image-preview" style="margin-bottom: 10px; text-align: center;">
                <img id="preview-img" src="" alt="Selected Image" style="display: none; max-width: 100px; max-height: 100px; border: 1px solid #ccc; border-radius: 5px;">
            </div>
    
            <!-- File Input Field -->
            <input type="file" id="profile_image" name="profile_image_path" accept="image/*" required onchange="previewImage(event)">
            
            @error('profile_image_path') <!-- Blade error handling -->
                <span style="color: red;">{{ $message }}</span>
            @enderror
        </div>


        <div>
            <label for="background_image">Background Image:</label>
            
            <!-- Div for Image Preview --> 
            <div id="image-preview" style="margin-bottom: 10px; text-align: center;">
                <img id="preview-img" src="" alt="Selected Image" style="display: none; max-width: 100px; max-height: 100px; border: 1px solid #ccc; border-radius: 5px;">
            </div>
    
            <!-- File Input Field -->
            <input type="file" id="background_image" name="background_image_path" accept="image/*" required onchange="previewImage(event)">
            
            @error('background_image_path') <!-- Blade error handling -->
                <span style="color: red;">{{ $message }}</span>
            @enderror
        </div>




        <!-- Slogan -->
        <div>
            <label for="slogan">Slogan:</label>
            <input type="text" id="slogan" name="slogan" placeholder="Enter your slogan" required>
            @error('slogan') <!-- Cleaner Blade directive for error handling -->
                <span style="color: red;">{{ $message }}</span>
            @enderror
        </div>
    
        <!-- Party -->
        <div>
            <label for="party">Political Party:</label>
            <input type="text" id="party" name="party" placeholder="Enter your party name" required>
            @error('party') <!-- Cleaner Blade directive for error handling -->
                <span style="color: red;">{{ $message }}</span>
            @enderror
        </div>
    
        <!-- Submit Button -->
        <div>
            <button type="submit">Submit Application</button>
        </div>
    </form>
    
    
    


</div>

<script>
    // JavaScript to Preview Selected Image
    function previewImage(event) {
        const input = event.target;
        const preview = document.getElementById('preview-img');

        if (input.files && input.files[0]) {
            const reader = new FileReader();

            reader.onload = function(e) {
                preview.src = e.target.result; // Set the image src to the file's base64 data
                preview.style.display = 'block'; // Make the image visible
            };

            reader.readAsDataURL(input.files[0]); // Read the file as a data URL
        } else {
            preview.src = '';
            preview.style.display = 'none';
        }
    }
</script>

</x-user-layout>
