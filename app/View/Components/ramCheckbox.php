<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ramCheckbox extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $ram;
    public function __construct($ram)
    {
        $this->ram = $ram;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.ram-checkbox');
    }
}
