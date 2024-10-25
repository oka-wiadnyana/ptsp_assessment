<?php
use App\Models\Officer;
use function Laravel\Folio\name;
use Illuminate\View\View;

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Hello, world!</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Fjalla+One&family=Monomaniac+One&family=Nova+Square&display=swap"
        rel="stylesheet">
    <style>
        img~span {
            font-family: 'Nova Square', sans-serif;
        }

        .title {
            font-family: 'Monomaniac One', sans-serif;
        }

        .slider__arrow {
            position: absolute;
        }

        .slider__arrow--prev {
            bottom: 50%;

        }

        .slider__arrow--next {
            bottom: 50%;
            right: 0;

        }
    </style>

    @livewireStyles
    <link href="{{ asset('starjs') }}/css/star-rating.css" rel="stylesheet">
</head>

<body>

    <div class="fluid-container"
        style="background-image: url('{{ asset('img/bg-main.jpg') }}'); background-repeat:no-repeat; background-size: cover">
        <div class="row vh-100 d-flex justify-content-center align-items-center p-2">
            <div class="col-md-6">
                <div class="card h-100"
                    style="background-image: url('{{ asset('img/bg-card.png') }}'); background-repeat:no-repeat; background-size: cover; border-radius: 10% ">

                    <div class="card-body">


                        <div class="row text-center d-flex flex-column align-items-center">
                            <img src="https://www.pn-denpasar.go.id/assets/img/logo/pt-denpasar.png" alt=""
                                class="" width="100rem">
                            <span class="h1 title text-white ">REVIEW PETUGAS PTSP</span>
                            <img src="{{ asset('officer_image/' . $officer->foto) }}" alt=""
                                style="border-radius: 50%; width: 10rem">
                            <span class="text-white h3">{{ $officer->nick_name }}</span>
                        </div>
                        <form action="{{ route('result.insert') }}" method="POST">
                            @csrf
                            <div class="row justify-content-center py-2 rounded mb-2">
                                <div class="col-10 d-flex flex-column align-items-center "
                                    style="border-radius:10px; background-color: rgba(255,255,255,0.7)">
                                    <div class="">
                                        <span class="h4 text-info title">Integritas</span>
                                    </div>
                                    <div class="">
                                        <select class="star-rating" name="result">
                                            <option value="">Select a rating</option>
                                            <option value="5">Excellent</option>
                                            <option value="4">Very Good</option>
                                            <option value="3">Average</option>
                                            <option value="2">Poor</option>
                                            <option value="1">Terrible</option>
                                        </select>
                                    </div>

                                </div>

                                <div class="col-10 d-flex flex-column align-items-center mt-2"
                                    style="border-radius:10px; background-color: rgba(255,255,255,0.7)">
                                    <div class="">
                                        <span class="h4 text-info title">Komunikasi</span>
                                    </div>
                                    <div class="">
                                        <select class="star-rating" name="result_komunikasi">
                                            <option value="">Select a rating</option>
                                            <option value="5">Excellent</option>
                                            <option value="4">Very Good</option>
                                            <option value="3">Average</option>
                                            <option value="2">Poor</option>
                                            <option value="1">Terrible</option>
                                        </select>
                                    </div>

                                </div>
                                <div class="col-10 d-flex flex-column align-items-center mt-2"
                                    style="border-radius:10px; background-color: rgba(255,255,255,0.7)">
                                    <div class="">
                                        <span class="h4 text-info title">Kompetensi</span>
                                    </div>
                                    <div class="">
                                        <select class="star-rating" name="result_kompetensi">
                                            <option value="">Select a rating</option>
                                            <option value="5">Excellent</option>
                                            <option value="4">Very Good</option>
                                            <option value="3">Average</option>
                                            <option value="2">Poor</option>
                                            <option value="1">Terrible</option>
                                        </select>
                                    </div>

                                </div>

                                <div class="col-10 p-0 justify-content-center mt-2">
                                    <label for="" class="form-label text-white fs-2">Isi Evaluasi</label>
                                    <textarea name="evaluation" id="" cols="30" rows="5" class="form-control"
                                        style="border-radius:10px; "></textarea>
                                </div>
                            </div>

                            <input type="hidden" name="officer" value="{{ $officer->id }}">
                            <div class="row">
                                <div class="col d-flex justify-content-center">
                                    <button type="submit" class="btn btn-primary"><span
                                            class="h5 px-3">Kirim</span></button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>


            </div>
        </div>

    </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>
    <script src="{{ asset('starjs') }}/js/star-rating.js"></script>
    <script>
        let option = {

            clearable: true,
            maxStars: 10,
            stars: null,
            tooltip: false,
        }
        var stars = new StarRating('.star-rating', option);
    </script>

</body>

@include('sweetalert::alert')

@livewireScripts

</html>
