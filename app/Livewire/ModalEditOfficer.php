<?php

namespace App\Livewire;

use App\Models\Officer;
use App\Models\Unit;
use Livewire\Attributes\On;
use Livewire\Component;

class ModalEditOfficer extends Component
{
    public $show = false;
    public $id;
    public $data;
 
    #[On('show-modal-edit-officer')]
    public function showModal($id)
    {
       $this->id=$id;
       $this->show = true;
      
    }
 
    public function closeModal()
    {
 
      
        $this->show = false;
    }
 
    public function render()
    {
        $units=Unit::all();
        $officer=Officer::where('id',$this->id)->first();
        return view('livewire.modal-edit-officer',compact('units','officer'));
    }
}
