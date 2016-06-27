
<div class="row">
    <div class="row">
      <?php $x = 1 ?>
      @foreach($posts as $post)

      <div class="col-md-6">
        <div class="col-md-7">
        <a href="{{route('formacion', $post->slug)}}">
          <h4 class="">{{$post->titulo}}. <small>{{$post->fecha}}</small></h4>
        </a>
        <p class="">{{$post->resumen}}</p>
        </div>
        <div class="col-md-5">
        {{HTML::image($post->image, 'Asesorias', array('style' => 'width: 200px; '))}}
        </div>
      </div>

      @if($x % 2 == 0)
          <br> 
          .
          <hr style="border-style:dashed none none;">
      @endif

      <?php $x++; ?>
      @endforeach
<!-- 
      <div class="col-md-6">
       <div class="col-md-5">
        {{HTML::image('images/compras gubernamentales CDMYPE UNICAES.png', 'compras gubernamentales CDMYPE UNICAES', array('class' => 'featurette-image img-responsive', 'width' => "300px"))}}
        </div>
        <div class="col-md-7">
        <h4 class="">Programa de Compras Gubernamentales.</h4>
        <p class="">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
       
      </div> -->
    </div>
</div>
<!-- <hr class="featurette-divider"> -->