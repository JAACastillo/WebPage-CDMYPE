@extends('plantilla')

@section('contenido')

	@include('video')
    @include('services')

    <hr>

<h2 style="color: #8F7859;
text-align: center;">Programa de Formación Empresarial</h2>
<hr  style="border-style:dashed none none;">

      @include('post')
      <!-- /END THE FEATURETTES -->
@stop