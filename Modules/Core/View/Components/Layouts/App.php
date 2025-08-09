<?php

namespace Modules\Core\View\Components\Layouts;

use Illuminate\View\Component;

class App extends Component
{
    public $title;

    public function __construct($title = null)
    {
        $this->title = $title;
    }

    public function render()
    {
        return view('core::layouts.app');
    }
}
