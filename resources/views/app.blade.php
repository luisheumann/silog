<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
{!! Html::script('js/toastr.js') !!}
{!! Html::style('css/toastr.css') !!}
 
 <title>Inventario</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

</head>
<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <a href="#" class="navbar-brand">SILOG</a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div id="bs-example-navbar-collapse-1" class="collapse navbar-collapse">
    	<ul class="nav navbar-nav">
            <li id="menu_inicio" class="active">
                            <a href="http://laravelfredy.sitrans.com.co/menu">
                    Inicio
                </a>
                    </li>
            <li id="menu_Trasporte">
                            <a href="http://laravelfredy.sitrans.com.co/transports">
                    Trasporte
                </a>
                    </li>
            <li id="menu_marca">
                            <a href="http://laravelfredy.sitrans.com.co/brands">
                    Marca
                </a>
                    </li>
            <li id="menu_Modelo">
                            <a href="http://laravelfredy.sitrans.com.co/modelos">
                    Modelo
                </a>
                    </li>
            <li id="menu_options" class="dropdown">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                    Options
                    <b class="caret"></b>
                </a>
                <ul class="dropdown-menu">
                                            <li>
                            <a href="#">About</a>
                        </li>
                                            <li>
                            <a href="#">Company</a>
                        </li>
                                    </ul>
                    </li>
    </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
    <div class="container">
        @yield('content')
    </div>
      <!-- Scripts -->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>