<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class HasNotVoted
{
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check() && Auth::user()->vote_status) {
            return redirect()->route('user.index')->with('info', 'You have already cast your vote.');
        }

        return $next($request);
    }
}
