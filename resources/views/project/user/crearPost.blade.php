<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/post.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.1.9/sweetalert2.all.min.js" integrity="sha512-IZ95TbsPTDl3eT5GwqTJH/14xZ2feLEGJRbII6bRKtE/HC6x3N4cHye7yyikadgAsuiddCY2+6gMntpVHL1gHw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    

    <title>inicio</title>
</head>
<body>
    
     <h1>Publicar venta</h1>

    <form action="{{route('insertar.post')}}" method="POST" enctype="multipart/form-data">
      @csrf
     <body>
        <div class="card">
            <input type="text" value="{{$user->nombre}}" id="nombre" name="nombre" readonly="readonly">
        <div>
        <div>
            <input type="text" value="{{$user->email}}" id="correo" name="correo" readonly="readonly">
        </div>
        <div >
          <label for="file-input">
          <img src="../images/upload.ico" alt="" id="uploadIco">
          </label>
          <input type="file" name="file" id="file-input" accept="image/gif,image/jpeg,image/jpg,image/png"
           multiple>
        </div>
          <div class="box">
            <input type="text" required="" name="titulo" />
            <span>Titulo de la publicacion</span>
            <i></i>
          </div>
          <div class="box">
            <input type="text" required="" name="categoria" />
            <span>Categoria</span>
            <i></i>
          </div>
          <div class="box">
            <input type="text" required="" name="etiquetas" />
            <span>etiquetas</span>
            <i></i>
          </div>
          <div class="box">
            <textarea name="detalles" id="textarea" cols="40" rows="15" placeholder="escribe aqui..." class="form-control"
            type="text" name="txtDescripcion" id="txtDescripcion">

            </textarea>
            <span>Detalles</span>
            <i></i>
            
          </div>
          <button type="button" class="cancel-btn">Cancelar</button>
        </div>
       </div>
      <button type="budmit" class="submit-btn">Publicar</button>
    </div>
      </body>
    </form>
   

      
    
    


   
            
    
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="../resources/views/project/js/jquery.min.js"></script>
    <script src="../resources/views/project/js/popper.min.js"></script>
    <script src="../resources/views/project/js/jquery-3.0.0.min.js"></script>
    
</body>
</html>