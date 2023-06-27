<?php

namespace App\View\Components;

use Illuminate\View\Component;

class EventDetails extends Component
{
    public function __construct() 
    {}

    public function render()
    {
        return view('components.event-details');
    }
}
