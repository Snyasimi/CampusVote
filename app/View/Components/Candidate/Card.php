<?php

namespace App\View\Components\Candidate;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Card extends Component
{
    /**
     * Create a new component instance.
     */
    public $candidate;
    public function __construct($candidate)
    {
        $this->candidate = $candidate;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.candidate.card');
    }
}
