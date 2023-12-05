<?php

namespace App\View\Components;

use Illuminate\View\Component;

class MainLayout extends Component
{
    /**
     * Get the view / contents that represents the component.
     *
     * @return \Illuminate\View\View
     */

    // З замінною layout також ніколи не працював. Але вже також посидів почитав та поспілкувався з ШІ
    public function render()
    {
        return view('layouts.main');
    }
}
