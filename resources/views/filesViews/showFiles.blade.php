@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                
                <div class="card-header">{{ __('Mis archivos') }}</div>

                <div class="box-body">

                    <table class="table table-bordered table-hover table-striped">

                        <thead>

                            <tr>
                                <th>Nombre del Archivo:</th>
                                <th></th>
                            </tr>

                        </thead>

                        <tbody>

                            @foreach($files as $file)

                                <tr>
                                    <td><a href="{{ url('/Download/'.$file->file)  }}">{{ $file->file }}</a></td>
                                    <td><a href="/DeleteFile/{{$file->file}}" class="btn btn-danger">Eliminar</a></td>
                                </tr>

                            @endforeach

                        </tbody>

                    </table>

                </div>
            </div>
        </div>
    </div>
</div>

@if(session('FileDeleted') == 'OK')

    <script type="text/javascript">
    Swal.fire(
        'Archivo eliminado correctamente',
        '',
        'success'
    )
    </script>

@endif

@endsection