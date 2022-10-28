@extends('plant')

@section('contenido')

        @if (Session::has('success'))
       <div class="alert alert-success text-center">
        {{Session::get('success')}}
       </div>

        @endif

<div class="container mt-5 col-md-7">
    <h3 class="display-2 text-center mb-5"> Registrar Actividad</h3>
    
    <form method="post" action="guardar">
        @csrf
        
        <label for="exampleInputEmail1" class="form-label">Nombre: </label>
        <input name="nombre"type="text" class="form-control" value="{{ old('nombre')}}">
            @error('nombre')
                <small><strong style="color: red">{{$message}}</strong></small>
            @enderror
         <br>
       
        <label for="exampleInputPassword1" class="form-label">Apunte: </label>
        <input name="apunte" type="text" class="form-control" value="{{ old('apunte')}}">
            @error('apunte')
                <small><strong style="color: red">{{$message}}</strong></small>
            @enderror
        <br>
        <button type="submit" class="btn btn-outline-dark">Subir</button>
    </form>
</div>

@endsection
