<?php ob_start() ?>
@extends('layouts.plantilla')


@section('contenido')

<body>    
<div>
    <h1>Administrar Usuarios</h1>
</div>
<div class="container p-3">
<button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Agregar usuario
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar usuario</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="admin/agregar" method="post">
        @csrf
        
        <label for="formNombre" class="form-label">Nombres :</label>
        <input type="text" name="nombre" placeholder="..." value="{{old('nombre')}}"><br>
         
        <label for="formNombre" class="form-label">E-mail :</label>
        <input type="text" name="email" placeholder="..." value="{{old('email')}}"><br>

        <label for="formNombre" class="form-label">Password :</label>
        <input type="text" name="password" placeholder="..." value="{{old('password')}}">

        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <input type="submit"class="btn btn-success" class="form-control" >
      </div>
      </form>

      
    </div>
  </div>
</div>
</div>
<div class="container">
<table class="table table-striped table-dark" class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">NOMBRE</th>
      <th scope="col">E-MAIL</th>
      <th scope="col">PASSWORD</th>
      <th scope="col">COMPRAS EN CAJA</th>
      <th>EDITAR</th>
      <th>ELIMINAR</th>
    </tr>
  </thead>
  <tbody>
    
    @foreach($crear as $users)
    
    <tr>
      <th scope="row">{{$users->id}}</th>
      <td>{{$users->nombre}}</td>
      <td>{{$users->email}}</td>
      <td>{{$users->password}}</td>
      <td>{{$users->userCompra}}</td>
      <td> <button onclick="location.href='{{route('users.edit',$users->id)}}'"class="btn btn-success">edit</button></td>
      <td> <button onclick="location.href='{{route('users.eliminar',$users->id)}}'"class="btn btn-danger">delete</button></td>
    </tr>
    @endforeach
  </tbody>
</table>
<div class="d-flex justify-content-center" >
{!!$crear->links()!!}
</div>
</div>

      <script
      src="https://code.jquery.com/jquery-3.6.1.slim.js"
      integrity="sha256-tXm+sa1uzsbFnbXt8GJqsgi2Tw+m4BLGDof6eUPjbtk="
      crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
      
      <script src="../resources/views/project/js/jquery.min.js"></script>
      @if ($errors->any())
    <div class="alert alert-danger container">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@endsection
</body>
</html>