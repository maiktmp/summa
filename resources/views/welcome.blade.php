@php
    @endphp

@push('scripts')
    <script src="{{asset('common/owl-carousel/owl.carousel.js')}}"></script>
    <script src="{{asset('common/owl-carousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/welcome/index.js')}}"></script>

@endpush
@push('css')
    <link rel="stylesheet" href="{{asset('common/owl-carousel/assets/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('common/owl-carousel/assets/owl.theme.default.css')}}">
    <link rel="stylesheet" href="{{asset('common/owl-carousel/assets/owl.theme.green.min.css')}}">
@endpush
@extends('template.main')

@section('content')

    <div class="owl-carousel owl-theme" style="z-index: -1">
        <div class="container-fluid
    background-cover-center "
             style="background-image: url('{{ asset('img/drive.jpg') }}');
                 height: calc(100vh - 50px);">
        </div>

        <div class="container-fluid
    background-cover-center "
             style="background-image: url('{{ asset('img/taller_1.jpg') }}');
                 height: calc(100vh - 50px);">
        </div>

        <div class="container-fluid
    background-cover-center "
             style="background-image: url('{{ asset('img/taller_2.jpg') }}');
                 height: calc(100vh - 50px);">
        </div>
    </div>

    <div id="welcome-banner" class="row d-flex slideInLeft animated delay-1s">
        <div class="col-12 text-left color-withe align-self-center p-3">
            <h3 class="color-black">Taller de reparación</h3>
            <h1 class="color-black">SUMMA MULTIMARCAS</h1>
            <h4 class="color-black">Somos tu mejor opción</h4>
            <button class="btn btn-outline-primary ">Conoce nuestro trabajo</button>
        </div>

    </div>
@endsection
