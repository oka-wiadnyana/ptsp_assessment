<?php
use App\Models\Result;
use Illuminate\Support\Carbon;

$result=Result::groupBy('officer_id')->select('officer_id',DB::raw('sum(result) as sum_res'),DB::raw('count(result) as count_res'),DB::raw('sum(result)/count(result) as avg'))->get();
// dd(ceil($result[1]->avg));
$bg=['success','warning','danger','info'];

// $month_array=[];

// for ($i=1; $i <=12 ; $i++) { 
//     $month_array[]= ['id'=>$i,'name'=>Carbon::create()->startOfMonth()->month($i)->isoFormat('MMMM')];
// }

// $month=collect($month_array);
// $this_year=now()->format('Y');

// $year_array=[];
// for ($i=0; $i <10 ; $i++) { 
//     $year_array[]= ['id'=>$i,'name'=>(int)$this_year-$i];
// }

// $year=collect($year_array);



// $res=$result->all();
?>
<x-main>
   
    

    <livewire:dashboard-view />

   
</x-main>