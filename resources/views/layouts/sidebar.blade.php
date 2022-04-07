<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>

<body class="hold-transition skin-green sidebar-mini login-page">
  <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">

        <ul class="sidebar-menu">

          <li>
            <a href="{{ url('Inicio') }}">
              <i class="fa fa-home"></i>
              <span>Ejecutivos</span>
            </a>
          </li>

          <li>
            <a href="{{ url('Inicio') }}">
              <i class="fa fa-home"></i>
              <span>Imagenes</span>
            </a>
          </li>

          <li>
            <a href="{{ url('Inicio') }}">
              <i class="fa fa-home"></i>
              <span>SGR</span>
            </a>
          </li>

          <li>
            <a href="{{ url('Inicio') }}">
              <i class="fa fa-home"></i>
              <span>IVA</span>
            </a>
          </li>

          <li>
            <a href="{{ url('Inicio') }}">
              <i class="fa fa-home"></i>
              <span>Paises</span>
            </a>
          </li>

          <li>
            <a href="{{ url('Inicio') }}">
              <i class="fa fa-home"></i>
              <span>Monedas</span>
            </a>
          </li>

          <li>
            <a href="{{ url('Inicio') }}">
              <i class="fa fa-home"></i>
              <span>Uso Plataforma</span>
            </a>
          </li>

          <li>
            <a href="{{ url('Inicio') }}">
              <i class="fa fa-home"></i>
              <span>Notaria</span>
            </a>
          </li>

          <li>
            <a href="{{ url('Inicio') }}">
              <i class="fa fa-home"></i>
              <span>Submenus</span>
            </a>
          </li>

          <li>
            <a href="{{ url('Inicio') }}">
              <i class="fa fa-home"></i>
              <span>Submenus Actions</span>
            </a>
          </li>

          <li>
            <a href="{{ url('Inicio') }}">
              <i class="fa fa-home"></i>
              <span>Carga masiva de proyectos</span>
            </a>
          </li>

        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>
</body>