@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                
                <div class="card-header">{{ __('Subir Archivos') }}</div>

                <div class="card-body">
                    <form method="post" enctype="multipart/form-data" >
                        @csrf
                        <input type="file" name="url" >
                        <input type="submit" value="Subir">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@if(session('FileUploaded') == 'OK')

<script type="text/javascript">
  Swal.fire(
    'El Archivo se ha subido correctamente',
    '',
    'success'
  )
</script>

@endif

@if(session('ErrorUploaded') == 'OK')

<script type="text/javascript">
  Swal.fire(
    'Debe elegir un archivo',
    '',
    'danger'
  )
</script>

@endif

@endsection