<?php

namespace App\Http\Livewire\Hostel;

use Livewire\Component;

class HostelsHomepageSpotlight extends Component
{
    private $hostelsDataRows = [];

    public function render()
    {
        \Log::info('-1 HostelsHomepageSpotlight ::' . print_r(-1, true));

//        $this->emitUp('setCurrentPageProperties', [
        // $this->emit('setCurrentPageProperties', [
        //     'title'                 => 'Cal from HostelsHomepageSpotlight "',
        // ]);

        return view('livewire.hostel.hostels-homepage-spotlight', [
            'hostelsDataRows' => $this->hostelsDataRows,

        ]);
    }

    public function mount()
    {
        \Log::info('-1 HostelsHomepageSpotlight MOUNT -99::' . print_r(-99, true));

        $this->hostelsDataRows = [
            ['id' => 1, 'label 1'],
            ['id' => 2, 'label 2'],
        ];
    }


    public function emitHeaderToComponent()
    {

        $this->hostelsDataRows = [
            ['id' => 5, 'label 5'],
            ['id' => 6, 'label 6'],
        ];
        $this->emit('setCurrentPageProperties', [
            'title' => 'Cal from ' . __CLASS__,
        ]);
    }
}
