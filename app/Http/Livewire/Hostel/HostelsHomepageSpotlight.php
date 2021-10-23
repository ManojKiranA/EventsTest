<?php

namespace App\Http\Livewire\Hostel;

use Livewire\Component;

class HostelsHomepageSpotlight extends Component
{
    public function render()
    {
        \Log::info( '-1 HostelsHomepageSpotlight ::' . print_r( -1, true  ) );

//        $this->emitUp('setCurrentPageProperties', [
        // $this->emit('setCurrentPageProperties', [
        //     'title'                 => 'Cal from HostelsHomepageSpotlight "',
        // ]);

        return view('livewire.hostel.hostels-homepage-spotlight');
    }

    public function emitHeaderToComponent()
{
    $this->emit('setCurrentPageProperties', [
        'title' => 'Cal from ' . __CLASS__,
    ]);
}
}
