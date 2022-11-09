<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.1.9/sweetalert2.all.min.js" integrity="sha512-IZ95TbsPTDl3eT5GwqTJH/14xZ2feLEGJRbII6bRKtE/HC6x3N4cHye7yyikadgAsuiddCY2+6gMntpVHL1gHw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <title>login</title>
</head>
<body>
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->
    <h2 class="active"> Iniciar session </h2>
    <h2 class="inactive underlineHover"><a href="registrarce">Registrarce</a> </h2>

    <!-- Icon -->
    <div class="fadeIn first">
    <img src="../resources/views/project/images/user.png" id="user"alt="">
    </div>

    <!-- Login Form -->
    <form method="post" action="{{route('autenticacionUser.inicio')}}">
      @csrf
      <input type="text" id="login" class="fadeIn second" name="email" placeholder="login" required="">
      <input type="password" id="password" class="fadeIn third" name="password" placeholder="password" required="">
      <input type="submit" class="fadeIn fourth" value="Log In">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="#">Forgot Password?</a>
    </div>

  </div>
</div>
@error('message')
    <script>

Swal.fire({
  icon: 'error',
  title: 'Oops...',
  text: 'Tienes algo mal!',
  footer: '<a href="">Why do I have this issue?</a>'
})

</script>  
@enderror
  

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="../resources/views/project/js/jquery.min.js"></script>
<script src="../resources/views/project/js/popper.min.js"></script>
<script src="../resources/views/project/js/jquery-3.0.0.min.js"></script>

</body>
</html>