@extends('plantilla')


@section('titulo')
    {{$post->titulo}} - CDMYPE UNICAES Ilobasco
@stop

@section('contenido')

<div class="row" style="line-height: 30px;">
	<h1 class="text-center">{{$post->titulo}}</h1>

          <hr style="border-style:dashed none none;">
	<div class="col-md-4">
        <img src="{{asset('/images/' . $post->imagen)}}" class="img-responsive" alt="{{$post->titulo}}">
	</div>

	<div class="col-md-8">
		{{$post->contenido}}
	</div>
</div>

@stop