<?php

namespace App\Livewire;

use App\Models\Officer;
use App\Models\Signer;
use App\Models\Unit;
use Livewire\Attributes\On;
use Livewire\Component;

class ModalEditSigner extends Component
{
    public $show = false;
    public $id;
    public $data;
 
    #[On('show-modal-edit-signer')]
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
       
        $signer=Signer::where('id',$this->id)->first();
        return view('livewire.modal-edit-signer',compact('signer'));
    }
}
