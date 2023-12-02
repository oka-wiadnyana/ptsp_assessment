<?php

namespace App\Livewire;

use App\Models\Result;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class DashboardView extends Component
{

    public $month=[];
    public $year=[];
    public $bg=[];
    public $result;
    public $filterMonth;
    public $filterYear;
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

        $result=Result::groupBy('officer_id')->select('officer_id',DB::raw('sum(result) as sum_res'),DB::raw('count(result) as count_res'),DB::raw('sum(result)/count(result) as avg'))->whereMonth('assessment_date',$this->filterMonth)->whereYear('assessment_date',$this->filterYear)->get();

        $this->result=$result->sortByDesc('avg');

        // dd($this->result);
    }

    public function getData(){
        $result=Result::groupBy('officer_id')->select('officer_id',DB::raw('sum(result) as sum_res'),DB::raw('count(result) as count_res'),DB::raw('sum(result)/count(result) as avg'))->whereMonth('assessment_date',$this->filterMonth)->whereYear('assessment_date',$this->filterYear)->get();

        $this->result=$result->sortByDesc('avg');
        // dd($this->filterMonth);
    }
 
    public function render()
    {
        return view('livewire.dashboard-view');
    }
}
