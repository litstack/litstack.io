<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Stars extends Component
{
    public $rating;
    public $count;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($rating, $count)
    {
        $this->rating = $rating;
        $this->count = $count;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.stars');
    }
}
