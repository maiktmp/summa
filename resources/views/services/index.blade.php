@php
    @endphp


<div class="w-100 d-flex bg-withe justify-content-center" id="servicios">
    <div class="row">
        <div class="col-12 text-center">
            <h1 id="services-header" class="color-black m-3">Nuestros servicios</h1>
        </div>
    </div>

</div>
<div class="d-flex justify-content-center flex-wrap bg-blue">

    <div class=" m-3" style="flex: 1">
        <div id="card-sheet" class="card h-100">
            <div class="card-body">
                <div class="w-100 text-center">
                    <img src="{{asset("img/ic_tools.png")}}" alt=""
                         style="width: 30px; height: 30px; color: rebeccapurple">
                </div>
                <h3 class="text-center">Hojalateria</h3>
                <h5 class="text-center">
                    <a href="#" data-toggle="modal" data-target="#modal-sheet-shop">Ver más</a>
                </h5>
            </div>
        </div>
    </div>

    <div class=" m-3" style="flex: 1">
        <div id="card-paint" class="card h-100">
            <div class="card-body">
                <div class="w-100 text-center">
                    <img src="{{asset("img/ic_paint-bucket.png")}}" alt="" style="width: 30px; height: 30px">
                </div>
                <h3 class="text-center">Pintura</h3>
                <h5 class="text-center">
                    <a href="#" data-toggle="modal" data-target="#modal-paint">Ver más</a>
                </h5>
            </div>
        </div>
    </div>

    <div class=" m-3" style="flex: 1">
        <div id="card-service" class="card h-100">
            <div class="card-body">
                <div class="w-100 text-center">
                    <img src="{{asset("img/ic_gear.png")}}" alt="" style="width: 30px; height: 30px">
                </div>
                <h3 class="text-center">Mantenimiento Preventivo</h3>
                <h5 class="text-center">
                    <a href="#" data-toggle="modal" data-target="#modal-service">Ver más</a>
                </h5>
            </div>
        </div>
    </div>

</div>
@include("services.modal_sheet_shop")
@include("services.modal_paint")
@include("services.modal_service")
