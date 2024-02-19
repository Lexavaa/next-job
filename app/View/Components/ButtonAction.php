<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ButtonAction extends Component
{
    public $read;
    public $edit;
    public $delete;
    public $print;

    public function __construct($read = null, $edit = null, $delete = null, $print = null){
        $this->read = $read ?? "";
        $this->edit = $edit ?? "";
        $this->delete = $delete ?? "";
        $this->print = $print ?? "";
    }
    
    public function render(): View|Closure|string
    {
        return view('components.atoms.ButtonAction');
    }
}
