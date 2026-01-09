<?php

namespace App\Http\Controllers;


use App\Models\User;
use App\Services\{UserService,CandidateService};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     protected $userService;
     protected $candidateService;

     public function __construct(UserService $userService,CandidateService $candidateService)
     {

	     $this->candidateService = $candidateService;
	     $this->userService = $userService; 
     }

    public function index()
    {
	    $user = Auth::user();

	    
	    $data = [
		    'Chairperson' => $this->candidateService->getByPosition('Chairperson'),
		    'Vicechair' => $this->candidateService->getByPosition('Vice chair'),
		    'Secretary' => $this->candidateService->getByPosition('Secretary'),
		    'Sports and welfare' => $this->candidateService->getByPosition('Sports and welfare'),
		    'Academic' => $this->candidateService->getByPosition('Academic'),
	    ];
		
	    if($user)
	    {
		    //some logic here to render an auth user view
	    }
	
	    #TODO add anon views 
	    return view('user-view.home-page',[
		    'user' => $user,
		    'data' => $data
	    ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
