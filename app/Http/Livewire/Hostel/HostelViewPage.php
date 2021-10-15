<?php

namespace App\Http\Livewire\Hostel;

use Livewire\Component;

class HostelViewPage extends Component
{
    public function render()
    {
        \Log::info( '-1 HostelViewPage ::' . print_r( -1, true  ) );
//        $this->emitUp('setCurrentPageProperties', [
        $this->emit('setCurrentPageProperties', [
            'title'                 => 'Cal from HostelViewPage "',
        ]);
        return view('livewire.hostel.hostel-view-page');
    }
}
