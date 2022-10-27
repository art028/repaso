@extends('plant')

@section('contenido')

<div class="container mt-5 col-md-7">

<table class="table table-striped">
    <thead>
      <tr class="table-dark">
        <th scope="col">#</th>
        <th scope="col">Nombre</th>
        <th scope="col">Apunte</th>
      </tr>
    </thead>
    <tbody>
      <tr class="table-primary">
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
      </tr>
      <tr class="table-primary">
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>Thornton</td>
      </tr>
      <tr class="table-primary">
        <th scope="row">3</th>
        <td>Juan</td>
        <td colspan="2">Larry the Bird</td>
        
        
      </tr>
    </tbody>
  </table>
</div>

@endsection
