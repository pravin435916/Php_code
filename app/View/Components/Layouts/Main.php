<?php
namespace App\View\Components\Layouts;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Main extends Component
{
    public string $pageName;
    public string $title = "Playlist App";
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->pageName = $pageName;
    }
    
    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        if($this->pageName){
            $this->title = $this->title.' | '.$this->pageName;
          }
        return view('components.layouts.main');
    }
}
