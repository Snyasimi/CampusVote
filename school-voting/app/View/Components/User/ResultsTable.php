<?php

namespace App\View\Components\User;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ResultsTable extends Component
{
    /**
     * Create a new component instance.
     */
	public $candidates;
	public $title;

    public function __construct($title,$candidates)
    {
	    //
	    $this->title = $title;
	    $this->candidates = $candidates;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.user.results-table');
    }
}
