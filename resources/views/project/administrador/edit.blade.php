
@extends('layouts.plantilla')


@section('contenido')


<body>    
<div>
    <h1>Administrar Usuarios</h1>
</div>

  </div>
</div>
</div>
<div class="container">
<form action="{{ route('users.edicion', $users->id)}}" method="POST" >
@method('PUT')
@csrf
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
    
    
    <tr>
      <th scope="row">{{$users->id}}</th>
      <td><input type="text" name="nombre" value="{{$users->nombre}}"></td>
      <td><input type="text" name="email" value="{{$users->email}}"></td>
      <td><input type="text" name="password"value="{{$users->password}}"></td>
      <td><input type="text" name="userCompra"value="{{$users->userCompra}}"></td>
      <td> <button type="submit" class="btn btn-success">actualizar</button></td>
      <td> <button class="btn btn-danger">delet</button></td>
    </tr>
    
  </tbody>
</table>
</form>
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