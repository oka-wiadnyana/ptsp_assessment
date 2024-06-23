<?php
    use App\Models\Satpam;
    use function Laravel\Folio\name;
    use Illuminate\View\View;
 
    use function Laravel\Folio\render;

    name('/satpam');

    render(function (View $view, Satpam $satpams) {
   
    
    return $view->with('satpams', $satpams->where('active','true')->get());
}); 

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img') }}/logo-text.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>{{ env('APP_NAME') }}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   
    <link href="https://fonts.googleapis.com/css2?family=Fjalla+One&family=Monomaniac+One&family=Nova+Square&display=swap" rel="stylesheet">

    <style>
        img~span{
            font-family: 'Nova Square', sans-serif;
        }

        .title{
            font-family: 'Monomaniac One', sans-serif;
        }

        .slider__arrow{
            position: absolute;
        }

        .slider__arrow--prev{
            bottom: 50%;
            
        }
        .slider__arrow--next{
            bottom: 50%;
            right: 0;

        }
    </style>
   
    @livewireStyles
    <link href="{{ asset('starjs') }}/css/star-rating.css" rel="stylesheet"> 
  </head>
  <body>
    <div class="fluid-container" style="background-image: url('{{ asset('img/bg-main.jpg') }}'); background-repeat:no-repeat; background-size: cover">
        <div class="vh-100 d-flex justify-content-center align-items-center p-2" >
            <div class="col-md-6" >
                <div class="card h-100" style="background-image: url('{{ asset('img/bg-card.png') }}'); background-repeat:no-repeat; background-size: cover; border-radius: 10% " >
                   
                    <div class="card-body">
                      
                        <div class="row text-center d-flex flex-column align-items-center">
                            <img src="https://www.pn-denpasar.go.id/assets/img/logo/pt-denpasar.png" alt="" class="" width="100rem">
                            <span class="h1 title text-white ">REVIEW PETUGAS KEAMANAN</span>
                        </div>
                        <div class="glide">
                            <div class="glide__track" data-glide-el="track"><ul class="glide__slides">
                                @foreach ($satpams as $satpam)
                                <a class="btn p-0 text-decoration-none" href="{{ url('assessment_satpam/'.$satpam->id) }}" style="outline: 0;">
                                <li class="glide__slide">
                                    
                                        <div class="col d-flex flex-column justify-content-center">
                                       

                                      
                                            <img src="{{ asset('satpam_image/'.$satpam->foto) }}" alt="" class="img-fluid" style="border-radius: 50%"><span class="text-center h3 text-white">{{ $satpam->nick_name }}</span>
                                     
                                        </div>
                                  
                                    
                                    
                                </li>
                            </a>
                                @endforeach
                               
                               
                                
                              </ul>
                             
                            </div>
                            <div data-glide-el="controls">
                                <button class="slider__arrow slider__arrow--prev glide__arrow glide__arrow--prev" data-glide-dir="<" style="border-radius: 50%; background-color: rgba(20, 124, 143, 0.5)">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24">
                                    <path d="M0 12l10.975 11 2.848-2.828-6.176-6.176H24v-3.992H7.646l6.176-6.176L10.975 1 0 12z"/>
                                  </svg>
                                </button>
                            
                                <button class="slider__arrow slider__arrow--next glide__arrow glide__arrow--next" data-glide-dir=">" style="border-radius: 50%; background-color: rgba(20, 124, 143, 0.5)">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24">
                                    <path d="M13.025 1l-2.847 2.828 6.176 6.176h-16.354v3.992h16.354l-6.176 6.176 2.847 2.828 10.975-11z"/>
                                  </svg>
                                </button>
                              </div>
                            
                          </div>
                          
                    </div>
                  </div>
          
           
                </div>
            </div>
           
    </div>
   

    
    @vite('resources/js/app.js')
    <script type="module">
        
       
        new Glide('.glide', {
            type: 'carousel',
            startAt: 0,
            perView: 2
        }).mount()
    </script>
    <script>

        function showModal(id){
            Livewire.dispatch('show-modal-rating',{id});
        }
    </script>
  
    
   
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    @include('sweetalert::alert')

    @livewireScripts
  </body>
    
     
   
    
</html>
