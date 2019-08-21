@php
    @endphp

@extends('template.main')

@section('content')
    <div class="container-fluid
    background-cover-center
    d-flex"
         style="background-image: url('{{ asset('img/about.jpg') }}');">

        <div class="row align-self-center" style="height: fit-content;">
            <div class=" col-12 col-md-10 offset-md-1">
                <div class="card card-about my-3 p-4 animated zoomIn delay-1s fast">
                    <div class="row">
                        <div class="col-12 text-center">
                            <h3>SUMMA MULTIMARCAS</h3>
                        </div>
                        <div class=" my-2 col-12 col-md-4 d-flex align-content-center justify-content-center">
                            <img class="img-fluid rounded" width="250" height="250" src="{{asset('img/taller_3.jpg')}}"
                                 alt="">
                        </div>
                        <div class="col text-center">
                            <p class="text-justify">
                                Somos un <b>TALLER MULTIMARCAS</b> enfocado a corregir cualquier
                                tipo de <b>COLISION</b>. En autos compactos, todo con las mejores normas
                                de calidad, tiempo de entrega y costo beneficio de las unidades.

                                <b> RENOVACION AUTOMOTRIZ </b> Cuenta con
                                la experiencia de mas de 40 años como agencia Volkswagen, estamos
                                convencidos que con el equipo, así como la tecnología de punta,
                                instalaciones, personal certificado ante CESVI y la experiencia que
                                deja una agencia; Podemos cubrir todas aquellas necesidades que
                                exige una aseguradora y nos demande el mercado en general.
                                Es necesario comentar que la puntualidad, la calidad de nuestro
                                trabajo y la atención personalizada son características que nos
                                respaldan ante nuestros clientes,
                                Con estos fundamentos, estamos seguros de brindar nuestros
                                servicios de primera calidad, ya que día con día estamos en
                                constante transformación apoyados en un sistema de gestión de
                                calidad y mejora continua en todas nuestras áreas
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
