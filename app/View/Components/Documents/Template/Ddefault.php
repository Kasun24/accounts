<?php

namespace App\View\Components\Documents\Template;

use App\Abstracts\View\Components\Documents\Template as Component;

class Ddefault extends Component
{
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.documents.template.default');
    }
}
