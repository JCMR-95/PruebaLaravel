@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                
                <div class="card-header">{{ __('Menú Principal') }}</div>

                <div class="card-body">
                    <aside class="main-sidebar">
                        <!-- sidebar: style can be found in sidebar.less -->
                        <section class="sidebar">

                            <ul class="sidebar-menu">

                            <li>
                                <a href="{{ url('UploadFile') }}">
                                <i class="fa fa-home"></i>
                                <span>Subir un archivo</span>
                                </a>
                            </li>

                            <li>
                                <a href="{{ url('ShowFiles') }}">
                                <i class="fa fa-home"></i>
                                <span>Ver histórico de mis archivos</span>
                                </a>
                            </li>

                            @if(auth()->user()->role == "Administrador")

                                <li>
                                    <a href="{{ url('ShowUsers') }}">
                                    <i class="fa fa-home"></i>
                                    <span>Administrar Usuarios</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ url('ShowAllFiles') }}">
                                    <i class="fa fa-home"></i>
                                    <span>Ver histórico de todos los archivos</span>
                                    </a>
                                </li>

                            @endif

                        </section>
                        <!-- /.sidebar -->
                    </aside>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
