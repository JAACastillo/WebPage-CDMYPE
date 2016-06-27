@extends('index')

@section('slider')
<div id="my_carusel"class="carousel slide">
    <ol class="carousel-indicators">
        <li class="active" data-slide-to="0" data-target="#my_carusel"></li>
        <li data-slide-to="1" data-target="#my_carusel"></li>
        <li data-slide-to="2" data-target="#my_carusel"></li>
    </ol>
    <div class="carousel-inner">
        <div class="item active">
            <img alt="1600*500" src="public/assets/img/imgCdmype1.jpg">
        </div>
        <div class="item">
            <img alt="1600*500" src="public/assets/img/imgCdmype2.jpg">
        </div>
        <div class="item">
            <img alt="1600*500" src="public/assets/img/imgCdmype3.jpg">
        </div>
    </div> 
    <a class="left carousel-control" href="#my_carusel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
    </a>
    <a class="right carousel-control" href="#my_carusel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
    </a>
</div>
<br/>
<br/>
<div class="row">
    <div class="col-md-4 col-sm-4">
        <div class="thumbnail">
            <img class="img-responsive" alt="600x300" src="public/assets/img/Asesoría-Empresarial-y-Asesoría-TIC.jpg">
            <div class="caption">
                <h3>Asesoría Empresarial y Asesoría TIC</h3>
                <p class="text-justify">Se refere al proceso de acompañamiento integral por un periodo de tiempo...</p>
                <p>{{ HTML::link('servicios#empresarial', 'Ver más »', array('class' => 'btn')) }}</p>
            </div>
        </div>
    </div>
    <div class="col-md-4 col-sm-4">
        <div class="thumbnail">
            <img class="img-responsive" alt="600x300" src="public/assets/img/capacitacion.jpg">
            <div class="caption">
                <h3>Capacitación</h3>
                <p class="text-justify">Se brinda formación en diferentes áreas de manera grupal para una o varias empresas en diversos...</p>
                <p>{{ HTML::link('servicios#capacitacion', 'Ver más »', array('class' => 'btn')) }}</p>
            </div>
        </div>
    </div>
    <div class="col-md-4 col-sm-4">
        <div class="thumbnail">
            <img class="img-responsive" alt="600x300" src="public/assets/img/asistenciaTecnica.jpg">
            <div class="caption">
                <h3>Asistencia Técnica</h3>
                <p class="text-justify">Se refiere a un servicio técnico, en temas de gestión empresariales o temas especializados. Fortaleciendo en aspectos como...</p>
                <p>{{ HTML::link('servicios#asistencia_tecnica', 'Ver más »', array('class' => 'btn')) }}</p>
            </div>
        </div>
    </div>
</div>
<br/>
<div class="row">
    <div class="col-md-4 col-sm-4">
        <div class="thumbnail">
            <img class="img-responsive" alt="600x300" src="public/assets/img/vinculacion.jpg">
            <div class="caption">
                <h3>Vinculación</h3>
                <p>Se faclita al empresario y empresaria el acercamiento a otros programas o servicios (financieros, desarrollo empresarial, etc.)</p>
                <p>{{ HTML::link('servicios#vinculacion', 'Ver más »', array('class' => 'btn')) }}</p>
            </div>
        </div>
    </div>
</div>
@stop