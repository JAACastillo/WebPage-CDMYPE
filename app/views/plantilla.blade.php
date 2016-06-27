<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{url('favicon.png')}}">
  <!--  <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)})(window,document,'script','//www.google-analytics.com/analytics.js','ga');ga('create', 'UA-50380484-1', 'catolica.edu.sv');ga('send', 'pageview');
        </script>
  --?

    <title>@yield('titulo', 'CDMYPE UNICAES Ilobasco')</title>

    <!-- Bootstrap core CSS -->
      {{ HTML::style('assets/css/bootstrap.min.css', array('media' => 'screen')) }}

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    {{ HTML::style('assets/css/carousel.css', array('media' => 'screen')) }}
  </head>
<!-- NAVBAR
================================================== -->
  <body>
  @include('menu')

    <br><br><br><br>
    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">
    @yield('contenido')

   


      <!-- FOOTER -->
      <hr/>

      <footer>
        <!-- <p class="pull-right"><a href="#">Volver </a></p> -->
        <p>&copy; CDMYPE UNICAES Ilobasco. &middot; </p>
      </footer>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    {{HTML::script('assets/js/bootstrap.min.js')}}
    <!--<script src="../..'assets/js/docs.min.js"></script>
     IE10 viewport hack for Surface/desktop Windows 8 bug 
    <script src="../..'assets/js/ie10-viewport-bug-workaround.js"></script>-->
  </body>
</html>