<?php

namespace App\View\Components;

use Illuminate\View\Component;

class MultiSelect extends Component
{

    /**
     * The name of the <select> element.
     *
     * @var string
     */
    public $name;

    /**
     * The items array.
     *
     * @var array
     */
    public $items;

    /**
     * Create a new component instance.
     *
     * @param  string  $name
     * @param  array  $items
     *
     * @return void
     */
    public function __construct($name, $items)
    {
        $this->name = $name;
        $this->items = $items;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.multi-select');
    }
}
