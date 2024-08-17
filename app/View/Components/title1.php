<?php

namespace App\View\Components;

use Illuminate\View\Component;

class title1 extends Component
{ public $class;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($tipo='default')
    {
        switch ($tipo) {
            case 'info':
                    $class='p-4 mb-4 text-sm text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400';
                    break;
            case 'danger':
                    $class='p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400';
                    break;
            default:
                    $class='p-4 mb-4 text-sm text-gray-800 rounded-lg bg-gray-50 dark:bg-gray-800 dark:text-gray-300';
                    break;
        }
        $this->class = $class;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.title1');
    }
}
