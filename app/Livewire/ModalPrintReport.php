<?php

namespace App\Livewire;

use App\Models\Signer;
use App\Models\Unit;
use Illuminate\Support\Carbon;
use Livewire\Attributes\On;
use Livewire\Component;

class ModalPrintReport extends Component
{
    public $show = false;
    
    public $data;
 
    public $month=[];
    public $year=[];
    public $bg=[];
    public $result;
    public $filterMonth;
    public $filterYear;
    public $signer;
    public function mount()
    {
        $month_array=[];

        for ($i=1; $i <=12 ; $i++) { 
            $month_array[]= ['id'=>$i,'name'=>Carbon::create()->startOfMonth()->month($i)->isoFormat('MMMM')];
        }

        $this->month=collect($month_array);
        $this_year=now()->format('Y');

        $year_array=[];
        for ($i=0; $i <10 ; $i++) { 
            $year_array[]= ['id'=>$i,'name'=>(int)$this_year-$i];
        }

        $this->year=collect($year_array);
        $this->bg=['success','warning','danger','info'];

        $this->filterMonth=now()->format('m');
        $this->filterYear=now()->format('Y');

        $this->signer=Signer::all();

     
        // dd($this->result);
    }

    #[On('show-modal-print-report')]
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
     
        return view('livewire.modal-print-report');
    }
}
