    <!-- It is quality rather than quantity that matters. - Lucius Annaeus Seneca -->


<x-user.layout>

    @push('stylesheets')
    <link rel="stylesheet" href="{{asset('css/userPages/components/homepage.css')}}">
    @endpush

    <div class="main-area">
        <!-- Chairperson Table -->

        <header>
            <h2>Mku e-polling</h2>
        </header>

        <h3>Top results</h3>
           
        
        <div class="table-container">
    
            <div class="position">
       
                <x-user.results-table title="Chairperson" :candidates="$pageData['Chairperson']"/>
            
            </div>
        
            <!-- Vice-Chair Table -->
            <div class="position">
        
                <x-user.results-table title="ViceChair" :candidates="$pageData['Vicechair']"/>
            </div>
        
            <!-- Treasurer Table -->
            <div class="position">
        
                <x-user.results-table title="secretary" :candidates="$pageData['Secretary']"/>
    
            </div>
   
            <div class="position">
       
                <x-user.results-table title="Sports and Welfare" :candidates="$pageData['Sports and welfare']"/>
   
            </div>
    
            <div class="position">
        
                <x-user.results-table title="Academic" :candidates="$pageData['Academic']"/>
            </div>
              
        </div>
    
        <!-- Secretary General, Sports, and Student Welfare would follow the same structure -->
    </div>

</x-user.layout>
