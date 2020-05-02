@extends('layouts.master')

@section('title', 'Contacto')

@section('cuerpo')
<div class="container">
    <div class="row">
        <div class="col-xl-8 offset-xl-2 py-5">
            <form id="contact-form" method="post" action="contact.php" role="form">
                <div class="messages"></div>
                <div class="controls">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="form_name">Nombre *</label>
                                <input id="form_name" type="text" name="name" class="form-control"
                                    placeholder="Ingrese su nombre *" required="required"
                                    data-error="Por favor ingrese su nombre.">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="form_lastname">Apellido *</label>
                                <input id="form_lastname" type="text" name="surname" class="form-control"
                                    placeholder="Ingrese su apellido *" required="required"
                                    data-error="Por favor ingrese su apellido.">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="form_email">Email *</label>
                                <input id="form_email" type="email" name="email" class="form-control"
                                    placeholder="Ingrese su email *" required="required"
                                    data-error="Ingrese un email válido.">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="form_need">Por favor seleccione una de las opciones *</label>
                                <select id="form_need" name="need" class="form-control" required="required"
                                    data-error="Por favor elija una de las opciones.">
                                    <option value=""></option>
                                    <option value="tercera opcion">1</option>
                                    <option value="segunda opcion">2</option>
                                    <option value="tercera opcion">3</option>
                                    <option value="Other">Otro</option>
                                </select>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="form_message">Mensaje *</label>
                                <textarea id="form_message" name="message" class="form-control"
                                    placeholder="Escribe tu mensaje acá *" rows="4" required="required"
                                    data-error="Por favor, dejanos tu mensaje."></textarea>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <input type="submit" class="btn btn-success btn-send" value="Send message">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <p class="text-muted">
                                <strong>*</strong> Estos campos son necesarios.

                                <h6 class=text-secondary>¿Necesitás mas info? ¡Estamos acá!</h6>
                                <!--Google map-->
                                <div class="embed-container">
                                    <iframe class="w-100"
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1992.2033089120123!2d-68.82266103301583!3d-32.885653916654874!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x916460b7d67d1fdc!2sEscuela%20N%C2%B04-118%20San%20Jose!5e0!3m2!1ses!2sar!4v1574969186491!5m2!1ses!2sar"
                                        frameborder="0" allowfullscreen></iframe>
                                </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection