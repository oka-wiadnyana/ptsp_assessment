<?php

namespace App\Livewire;

use App\Models\Officer;
use App\Models\Unit;
use App\Models\User;
use Livewire\Attributes\On;
use Livewire\Component;

class ModalEditUser extends Component
{
    public $show = false;
    public $id;
    public $data;
 
    #[On('show-modal-edit-user')]
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
        $user=User::where('id',$this->id)->first();
        return view('livewire.modal-edit-user',compact('user'));
    }
}
