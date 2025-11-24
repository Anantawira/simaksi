<?php

namespace App\Livewire;

use Livewire\Component;

class ShowHome extends Component
// {
//     public function render()
//     {
//         $services = Service::orderBy('title','asc')->get();
//         return view('livewire.show-home'
//         , ['services' => $services]);      
//     }
// }

{
    public function render()
    {
        return view('livewire.show-home');      
    }
}