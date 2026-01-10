
    <!-- Nothing in life is to be feared, it is only to be understood. Now is the time to understand more, so that we may fear less. - Marie Curie -->
@push('stylesheets')
    <link rel="stylesheet" href="{{asset('css/userPages/components/votepage.css')}}">
@endpush  
<x-user.layout>

    <div class="main-area">
        <!-- Chairperson Table -->

        <header>
            <h2>Mku e-polling</h2>
        </header>

        <h3>Vote for representatives</h3>
        
            
        
        <form method="POST" action="{{  route('vote.store') }}">
            <!-- Chairperson Fieldset -->
            @csrf
            <fieldset>
          
                <legend>Chairperson</legend>
        
            <!-- Card 1 -->
                <div>
                    @forelse( $pageData["chairPerson"] as $candidate)
                        <x-candidate.card :candidate="$candidate"/>
                    @empty
                        <p> Sorry, there were no candidated for this position</p>
                    @endforelse
                </div>
        
               
            </fieldset>
            
        
            <!-- Vice-Chair Fieldset -->
            <fieldset>
          
                <legend>Vice-Chair</legend>
        
                <!-- Card 1 -->
                <div>
                    @forelse( $pageData["viceChair"] as $candidate)
                        <x-candidate.card :candidate="$candidate"/>
                    @empty
                        <p> sorry, there were no candidated for this position</p>
                    @endforelse
                </div>
        
               
            </fieldset>
        
            <!-- Treasurer Fieldset -->
            <fieldset>
          
                <legend>Secretary</legend>
        
                <!-- Card 1 -->
                <div>
                    @forelse( $pageData["secretary"] as $candidate)
                    <x-candidate.card :candidate="$candidate"/>
                    @empty
                    <p> Sorry, there were no candidated for this position</p>
                    @endforelse
                </div>
               
            </fieldset>

            <fieldset>
          
                <legend>Sports and welfare</legend>
        
                     <!-- Card 1 -->
                <div>
                    @forelse( $pageData["SportsAndWelfare"] as $candidate)
                        <x-candidate.card :candidate="$candidate"/>
                    @empty
                        <p> Sorry, there were no candidated for this position</p>
                     @endforelse
                </div>
        
               
            </fieldset>

            <fieldset>
          
                <legend>Academic</legend>
        
                <!-- Card 1 -->
                <div>
                    @forelse( $pageData["academic"] as $candidate)
                        <x-candidate.card :candidate="$candidate"/>
                    @empty
                        <p> Sorry, there were no candidated for this position</p>
                    @endforelse
                </div>
               
            </fieldset>

        </form>
        
        
        
        
    </div>

  </x-user.layout>
   
    
