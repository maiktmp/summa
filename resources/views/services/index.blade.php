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
    <div class="container-fluid">
        <div class="row">

            <div class="card-flex">
                <div class="card">
                    <div class="card-body">
                        <div class="card-header"
                             style='
                                 background-size: cover;
                                 background-position: center;
                                 background: linear-gradient(rgba(255,255,255,.5), rgba(255,255,255,.5)), url("{{asset("img/hojalateria.jpg")}}");
                                 height: 200px;'></div>
                    </div>
                </div>
            </div>


            <div class="card-flex">
                <div class="card">
                    <div class="card-body">
                        <div class="card-header"
                             style='
                                 background-size: cover;
                                 background-position: center;
                                 background: linear-gradient(rgba(255,255,255,.5), rgba(255,255,255,.5)), url("{{asset("img/hojalateria.jpg")}}");
                                 height: 200px;'></div>
                    </div>
                </div>
            </div>


            <div class="card-flex">
                <div class="card">
                    <div class="card-body">
                        <div class="card-header"
                             style='
                                 background-size: cover;
                                 background-position: center;
                                 background: linear-gradient(rgba(255,255,255,.5), rgba(255,255,255,.5)), url("{{asset("img/hojalateria.jpg")}}");
                                 height: 200px;'></div>
                    </div>
                </div>
            </div>


            <div class="card-flex">
                <div class="card">
                    <div class="card-body">
                        <div class="card-header"
                             style='
                                 background-size: cover;
                                 background-position: center;
                                 background: linear-gradient(rgba(255,255,255,.5), rgba(255,255,255,.5)), url("{{asset("img/hojalateria.jpg")}}");
                                 height: 200px;'></div>
                    </div>
                </div>
            </div>


            <div class="card-flex col">
                <div class="card">
                    <div class="card-body">
                        <div class="card-header"
                             style='
                                 background-size: cover;
                                 background-position: center;
                                 background-image: url("{{asset("img/hojalateria.jpg")}}");
                                 height: 200px;'></div>
                    </div>
                </div>
            </div>


            <div class="card-flex">
                <div class="card">
                    <div class="card-body">
                        <div class="card-header"
                             style='
                                 background-size: cover;
                                 background-position: center;
                                 background: linear-gradient(rgba(255,255,255,.5), rgba(255,255,255,.5)), url("{{asset("img/hojalateria.jpg")}}");
                                 height: 200px;'></div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
