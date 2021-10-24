<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AppHeader extends Component
{
    protected $listeners = ['setCurrentPageProperties' => 'setCurrentPagePropertiesCallback'];
    public $title = 'default title # 1 ';
    public function render()
    {
        \Log::info( '-1 AppHeader ::' . print_r( -1, true  ) );

        return view('livewire.app-header');
    }

    public function setCurrentPagePropertiesCallback($data)
    {
        // \Log::info(varDump($data, 'INSIDE  -1  setCurrentPagePropertiesCallback $data::'));
        if ( ! empty($data['title'])) {
            $this->title = $data['title'];
        }
    } // public function setCurrentPagePropertiesCallback($data)

}
