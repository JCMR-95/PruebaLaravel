@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div class="box-header">

                            <button class="btn btn-primary" href="{{ route('register') }}">Crear Nuevo Usuario</button>

                        </div>

                        <div class="box-body">

                            <table class="table table-bordered table-hover table-striped">

                                <thead>

                                    <tr>

                                        <th>Nombre</th>
                                        <th>Email</th>
                                        <th>Rol</th>
                                        <th></th>

                                    </tr>

                                </thead>

                                <tbody>

                                    @foreach($users as $user)

                                        <tr>

                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->role }}</td>

                                            <td>

                                            <a href="{{ url('EditUser/'.$user->id) }}" class="btn btn-success">Editar</a>

                                            <a href="/DeleteUser/{{$user->id}}" class="btn btn-danger">Eliminar</a>

                                            </td>

                                        </tr>

                                    @endforeach

                                </tbody>

                            </table>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@if(session('UserEdited') == 'OK')

<script type="text/javascript">
  Swal.fire(
    'El Usuario ha sido editado',
    '',
    'success'
  )
</script>

@endif

@if(session('UserDeleted') == 'OK')

    <script type="text/javascript">
    Swal.fire(
        'Usuario eliminado correctamente',
        '',
        'success'
    )
    </script>

@endif

@endsection
