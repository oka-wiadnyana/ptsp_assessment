<div class="card col p-4" >
    @push('link')
    <!-- Font Awesome Icon Library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .checked {
          color: orange;
        }

        .star-rating{
            font-size: 5rem;
        }
        </style>
    @endpush
    <div class="row" >
        <div class="col-6 d-flex align-items-center mb-3" >
            <div class="col p-0 d-flex align-items-center" >
                <x-partial.plain-select selectName="month" :selectValue=$month selectPlaceHolder="Bulan" optValue='id' optText='name' :optUpdateValue=$filterMonth class="m-0" wire:model="filterMonth"/>
            </div>
            <div class="col">
                <x-partial.plain-select selectName="year" :selectValue=$year selectPlaceHolder="Tahun" optValue='name' optText='name' :optUpdateValue=$filterYear wire:model="filterYear"/>
            </div> 
            <div class="col d-flex align-items-center" >

                <x-partial.button class="btn btn-primary px-4 py-2 m-0" buttonText="Cari" buttonType="button" wire:click="getData" onclick="rebuildStar()"/>
            </div>
           
        </div>
      
    </div>
    @foreach ($result as $res)
        
    <div class="alert alert-{{ $bg[rand(0,3)] }} d-md-flex" role="alert">
        <div class="col-2 text-center d-md-flex flex-column align-items-center justify-content-center p-0" >

            <img src="{{ asset('officer_image/'.$res->officerName->foto) }}" alt="" class="img-fluid" style="border-radius:50%" width="100rem" >
            <div class="col py-0 h5 fw-bold" style=" line-height:2"><span>
                {{ $res->officerName->name }}</span> </div>
        </div>
        <div class="col d-md-flex align-items-center justify-content-center" >
            @for ($i=1;$i<=5;$i++)
                <span class="fa fa-star {{ $i<=ceil($res->avg)?'checked':'' }} star-rating"></span>
            @endfor
            

        </div>
        <div class="col d-md-flex flex-column align-items-center justify-content-center" >
           
                <div class="h1 p-5 text-center" style="border: 2px solid; background-color: white; border-radius:50%">{{ $res->sum_res }}</div>
            
           
                <span class="text-center">Total Skor</span>
            
        </div>
        <div class="col d-md-flex flex-column align-items-center justify-content-center" >
           
                <div class="h1 p-5 text-center" style="border: 2px solid; background-color: white; border-radius:50%">{{ $res->count_res }}</div>
            
           
                <span class="text-center">Jumlah Assessment</span>
            
        </div>
        <div class="col d-md-flex flex-column align-items-center justify-content-center" >
            <div class="h1 p-5 text-center" style="border: 2px solid; background-color: white; border-radius:50%">{{ number_format($res->avg,'2',',','.') }}</div>
            <span class="text-center">Avg</span>
        </div>
    </div>
    @endforeach
   
  
    
</div>
