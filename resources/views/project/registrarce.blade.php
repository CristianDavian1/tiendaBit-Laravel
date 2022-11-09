<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.1.9/sweetalert2.all.min.js" integrity="sha512-IZ95TbsPTDl3eT5GwqTJH/14xZ2feLEGJRbII6bRKtE/HC6x3N4cHye7yyikadgAsuiddCY2+6gMntpVHL1gHw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>Registro</title>
</head>
<body>
<div class="wrapper fadeInDown">
  <div id="formContent">
   
    <h2 class="active"> Registrarce </h2>
    <h2 class="inactive underlineHover"><a href="login">Iniciar session</a></h2>

   
    <div>
    <img src="" alt="" id="imgVista" class="imgPerfil">
    </div>

   
    <form action="admin/agregarR" method="post" enctype="multipart/form-data" >
      @csrf
      
      <input type="file" id="file-upload" class="custom-file-input" id="imgInp" id="inputGroupFile01" 
      name="userPhoto" accept="image/*" value="{{old('userPhoto')}}" onchange="previewImage(event, '#imgVista')">
      
      <input type="text"  class="fadeIn second" name="nombre" placeholder="nombre" required="" value="{{old('nombre')}}">
      <input type="text"  class="fadeIn third" name="email" placeholder="correo" required="" value="{{old('email')}}">
      <input type="password"  id="password" class="fadeIn third" name="password" placeholder="contraseña" required="" value="{{old('password')}}">
      <i class="fa-solid fa-eye" onclick="mostrarContrasena()"></i>
      

      <button class="cancelar" >Cancelar</button>
      <input type="submit" class="fadeIn fourth" value="Registrarme" class="form-control">
      
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      
    </div>
    @if($errors->any())
    <script>
    Swal.fire({
      title: 'el archivo de foto debe ser una imagen',
      showClass: {
        popup: 'animate__animated animate__fadeInDown'
      },
      hideClass: {
        popup: 'animate__animated animate__fadeOutUp'
      }
    })
    </script>

    @endif

    

  </div>
</div>
<script>
  function mostrarContrasena(){
      var tipo = document.getElementById("password");
      if(tipo.type == "password"){
          tipo.type = "text";
      }else{
          tipo.type = "password";
      }
  }
</script>
<script>

function previewImage(event, querySelector){

//Recuperamos el input que desencadeno la acción
const input = event.target;

//Recuperamos la etiqueta img donde cargaremos la imagen
$imgPreview = document.querySelector(querySelector);

// Verificamos si existe una imagen seleccionada
if(!input.files.length) return

//Recuperamos el archivo subido
file = input.files[0];

//Creamos la url
objectURL = URL.createObjectURL(file);

//Modificamos el atributo src de la etiqueta img
$imgPreview.src = objectURL;
              
}


</script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="../resources/views/project/js/jquery.min.js"></script>
<script src="../resources/views/project/js/popper.min.js"></script>
<script src="../resources/views/project/js/jquery-3.0.0.min.js"></script>

</body>
</html>