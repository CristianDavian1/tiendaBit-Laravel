<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/inicio.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.1.9/sweetalert2.all.min.js" integrity="sha512-IZ95TbsPTDl3eT5GwqTJH/14xZ2feLEGJRbII6bRKtE/HC6x3N4cHye7yyikadgAsuiddCY2+6gMntpVHL1gHw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/fontawesome.min.css">
    
    
    
    
    <title>inicio</title>
</head>
<body id="cuerpo">
    @extends('layouts.userMenu')

    @section('contenido')

   @foreach ($imprimir as $post)

    
    <div id="cartas">
        <div>

          <div class="card h-100">
            <img src="{{Storage::disk('s3')->url($post->file)}}" class="card-img-top" alt="..." onclick="">
            <div class="card-body">
              <h5 class="card-title"> <a href="">{{$post->titulo}}</a></h5>
              @php
                  $cortador = substr($post->detalles, 0, 100)."...";
                  echo $cortador;
              @endphp
              
            </div>
            <div class="card-footer">
              <small >{{$post->nombre}}  </small>

              <small >{{$post->correo}}  </small><br>
              <hr>
              <small >{{$post->created_at}}</small> <div id="likes" onclick="window.location.href='{{route('add.like', $post->id)}}'">
                <i class="fa-solid fa-thumbs-up fa-2x"></i> {{$post->like}}</div>
                <div id="likes"><i class="fa-solid fa-comment-dots fa-2x"></i>{{$post->comentarios}}</div>
            </div>
            
          </div>
        </div>

      </div>
      
            
        @endforeach

   
        

        
    
      
     </div>
  </div>
</div>

    @endsection
     
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/fontawesome.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="../resources/views/project/js/jquery.min.js"></script>
    <script src="../resources/views/project/js/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    
</body>



</html>