@php
    @endphp


<div class="w-100 d-flex bg-withe justify-content-center" id="contactanos">
    <div class="col-12 text-center">
        <h1 id="contact-header" class="color-black m-3">Contactanos</h1>
    </div>
</div>


<div class="w-100 d-flex justify-content-center my-3">
    <div class="col-10 m-auto">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-11 m-auto">
                        <form class="text-center">

                            <div class="form-group">
                                <label for="inp-name">Nombre</label>
                                <input type="text"
                                       class="form-control"
                                       id="inp-name">
                            </div>

                            <div class="form-group">
                                <label for="inp-email">Correo</label>
                                <input type="email"
                                       class="form-control"
                                       id="inp-email">
                            </div>

                            <div class="form-group">
                                <label for="inp-number">Número de contacto</label>
                                <input type="number"
                                       class="form-control"
                                       id="inp-number">
                            </div>

                            <div class="form-group">
                                <label for="in-comment">Escribe tus comentarios</label>
                                <textarea class="form-control" id="in-comment" rows="10"></textarea>
                            </div>

                            <button type="submit" class="btn btn-outline-primary">Enviar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
