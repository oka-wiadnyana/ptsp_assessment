<?php

namespace App\Livewire;

use App\Models\Unit;
use Livewire\Attributes\On;
use Livewire\Component;

class ModalAddUser extends Component
{
    public $show = false;
    
    public $data;
 
    #[On('show-modal-add-user')]
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
       
        return view('livewire.modal-add-user');
    }
}
