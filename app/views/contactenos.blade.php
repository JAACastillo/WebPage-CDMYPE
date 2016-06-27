@extends ('plantilla')

@section('titulo')
    Contacto CDMYPE UNICAES Ilobasco
@stop

@section('contenido')
<div class="row">
    <div class="col-md-12">
        @if ($errors->any())
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Por favor corrige los siguentes errores:</strong>
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        @if(Session::has('mensaje_error'))
                <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                {{ Session::get('mensaje_error') }}
                </div>
            @endif
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <img class="img-responsive hidden-xs" src="assets/img/mapa-cdmype.png">
        <br/>
        <address>
            <strong>Teléfono.</strong>
            <br>
            2378-1500 <abbr title="Phone">Ext:</abbr> (136)
            <br/>
            <strong>Correo Electrónio.</strong>
            <br>
            cdmype.unicaes@gmail.com
        </address>
    </div>
    <div class="col-md-6">
        <div class="panel panel-info">
            <div class="panel-heading">
                <h3 class="panel-title">Contáctenos</h3>
            </div>
            <div class="panel-body">
                {{ Form::open(array('url' => 'contacto', 'method' => 'post', 'class' => 'form-horizontal')) }}
                <div class="form-group">
                    {{ Form::label('nombre', 'Nombre', array('class' => 'control-label col-md-3')) }}
                    <div class="col-md-9">
                        {{ Form::text('nombre', null, array('placeholder' => 'Nombre y Apellido', 'class' => 'form-control')) }}
                    </div>
                </div>
                <div class="form-group">
                    {{ Form::label('telefono', 'Teléfono', array('class' => 'control-label col-md-3')) }}
                    <div class="col-md-9">
                        {{ Form::text('telefono', null, array('placeholder' => 'Teléfono', 'class' => 'form-control')) }}
                    </div>
                </div>
                <div class="form-group">
                    {{ Form::label('correo', 'Email', array('class' => 'control-label col-md-3')) }}
                    <div class="col-md-9">
                        {{ Form::text('correo', null, array('placeholder' => 'Correo electrónico', 'class' => 'form-control')) }}
                    </div>
                </div>
                <div class="form-group">
                    {{ Form::label('asunto', 'Asunto', array('class' => 'control-label col-md-3')) }}
                    <div class="col-md-9">
                        {{ Form::text('asunto', null, array('placeholder' => 'Asunto', 'class' => 'form-control')) }}  
                    </div>
                </div>
                <div class="form-group">
                    {{ Form::label('comentarios', 'Comentarios',array('class' => 'control-label col-md-3')) }}
                    <div class="col-md-9">
                        {{ Form::textarea('comentarios', null, array('placeholder' => 'Comentarios y/o Sugerencias', 'class' => 'form-control')) }} 
                    </div>
                </div>
                {{ Form::button('Enviar', array('type' => 'submit', 'class' => 'btn btn-success', 'id'=>'enviar')) }}      
                {{ Form::close() }}
            </div>
        </div>
    </div>
</div>
@stop