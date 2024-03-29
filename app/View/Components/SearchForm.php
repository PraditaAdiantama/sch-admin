<?php

namespace App\View\Components;

use Illuminate\View\Component;

class SearchForm extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        public string $action,
        public string $placeholder,
        public string $name
    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.search-form');
    }
}
