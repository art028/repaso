@extends('plant')

@section('contenido')

<div class="container mt-5 col-md-7">
    <h3 class="display-2 text-center mb-5"> Registrar Actividad</h3>

    <form>
        <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nombre: </label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Apunte: </label>
        <input type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3 form-check">
        </div>
        <button type="submit" class="btn btn-outline-dark">Submit</button>
    </form>
</div>

@endsection
