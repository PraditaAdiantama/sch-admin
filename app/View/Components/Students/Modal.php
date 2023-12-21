<?php

namespace App\View\Components\Students;

use Illuminate\View\Component;

class Modal extends Component
{
    public function __construct(
        public $classes
    ) {
    }

    public function render()
    {
        return view("components.students.modal");
    }
}
