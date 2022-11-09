<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
    <link rel="icon" href="../resources/views/project/images/fevicon.png" type="image/gif" />
    <link rel="stylesheet" href="{{asset('css/jquery.mCustomScrollbar.min.css')}}">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <link rel="stylesheet" href="{{asset('vendor/jquery-ui-1.13.2/jquery-ui-min-css')}}">
    <title>Document</title>
</head>
<body class="cuerpoBuscar" >

   
    <section class="container">
        <div class="input-group" class="row">
            <form action="buscar/{text}">
            <input class="input" autocomplete="off" name="text"  required="" >
            <label class="user-label">Buscar</label>
            <div>
            <button type="submit" class="buscarButton"> Buscar
            </button>
            </div>
            </form>
        </div>
    </section>
    
    









         <script src="{{asset('js/jquery.min.js')}}"></script>
         <script src="{{asset('js/popper.min.js')}}"></script>
         <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
         <script src="{{asset('js/jquery-3.0.0.min.js')}}"></script>
          <script src="{{asset('vendor/jquery-ui-1.13.2/jquery-ui-min-js')}}"></script>
         <script src="{{asset('js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
         <script src="{{asset('js/custom.js')}}"></script>
</body>
</html>