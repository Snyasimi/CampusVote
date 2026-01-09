<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\{User};
use App\Http\Requests\{SignUpRequest,LoginRequest};
use App\Services\{SecurityService};

class SecurityController extends Controller
{
	protected $securityService;

	public function __construct(SecurityService $securityService)
	{
		$this->securityService = $securityService;
	}
	//

	public function signUpPage()
	{
		return view('auth-view.sign-up');
	}

	public function loginPage()
	{
		return view('auth-view.login');
	}

	public function authenticate(LoginRequest $request)
	{
		$credentials = $request->validated();

		$status = $this->securityService->authenticate($credentials);

		if($status)
		{

			return redirect()->intended(action(

				[UserController::class,'index']
			));
		}

		return back()->withErrors(['email' => 'Credentials do not match our records'])->onlyInput('email'); 

	}
	public function registerUser(SignUpRequest $request)
	{

		/* if($request->fails())
		{

			return view('user-view.signup')->withErrors($request->errors());
		}
		 */

		$details = $request->validated();

		$user = $this->securityService->registerUser($details);

		Auth::login($user);
		return redirect()->route('user.index');
	}


	public function logout(Request $request)
	{
		Auth::logout();
		$request->session()->invalidate();
		$request->session()->regenerateToken();

		return redirect()->route('loginPage');
	}
}
