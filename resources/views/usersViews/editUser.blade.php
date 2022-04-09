@extends('layouts.app')

@section('content')

<?php
    $exp = explode('/', $_SERVER["REQUEST_URI"]);
?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Editar Usuario') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div class="box-body">

                        <form method="post" action="{{ url('UpdateUser/'.$exp[2]) }}">
                            @csrf
                            @method('PUT')
                    
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Nombre:</strong>
                                        <input type="text" name="name" value="{{ $user->name }}" class="form-control">
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Correo:</strong>
                                        <input type="text" name="email" value="{{ $user->email }}" class="form-control">
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Rol:</strong>
                                        <select name="role" id="role">
                                            <option value="Administrador">Administrador</option>
                                            <option value="Usuario Normal">Usuario Normal</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                    
                        </form>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
