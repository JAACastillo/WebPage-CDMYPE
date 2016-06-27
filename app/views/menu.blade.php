
<!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="{{url('/')}}" style="padding:5px; margin-right:50px">{{ HTML::image('assets/img/logo-CDMYPE.png', 'Logo CDMYPE UNICAES Ilobasco' ,array('width' => '100px')) }}</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="{{url('/')}}">Inicio</a></li>
            <li><a href="{{url('formacion')}}">Formación</a></li>
            <li><a href="{{url('servicios')}}">Servicios</a></li>
            <li><a href="{{url('contactenos')}}">Contacto</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
