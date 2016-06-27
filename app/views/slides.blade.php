<!-- Carousel
================================================== -->

<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
  </ol>
  <div class="carousel-inner" role="listbox">
    <div class="item active">
     {{HTML::image('images/CDMYPE UNICAES.png', 'Centro de Desarrollo de la Micro y Pequeña Empresa Ilobasco')}}
      <div class="container">
        <div class="carousel-caption">
          <h1>CDMYPE UNICAES Ilobasco.</h1>
          <p>Centro de Desarrollo de la Micro y Pequeña Empresa UNICAES Ilobasco.</p>
        </div>
      </div>
    </div>
    <div class="item">
      {{HTML::image('images/visita Ileana Rogel CDMYPE UNICAES Ilobasco.jpg', 'visita Ileana Rogel CDMYPE UNICAES Ilobasco.jpg')}}
      <div class="container">
        <div class="carousel-caption">
          <h1>Visita directora CONAMYPE Ileana Rogel.</h1>
          <p>Ministro de Economía y Directora de CONAMYPE Visitan nuestro Centro de Desarrollo para conocer buenas prácticas de atenci</p>
        </div>
      </div>
    </div>
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div><!-- /.carousel -->
