<?php

namespace App\Livewire;

use App\Models\Unit;
use Livewire\Attributes\On;
use Livewire\Component;

class ModalAddOfficer extends Component
{
    public $show = false;
    
    public $data;
 
    #[On('show-modal-add-officer')]
    public function showModal()
    {
       
       $this->show = true;
      
    }
 
    public function closeModal()
    {
 
      
        $this->show = false;
    }
 
    public function render()
    {
        $units=Unit::all();
        return view('livewire.modal-add-officer',compact('units'));
    }
}
