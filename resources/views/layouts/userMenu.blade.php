@yield('menu')


  <div class="container-fluid" >
    <div class="row flex-nowrap" >
        <div class=" bg-dark" id="navInicio">
            <div class="navOptions">
                <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <span class="fs-5 d-none d-sm-inline">Menu</span>
                </a>
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                    
                    <li>
                        <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                            <i class="fa-solid fa-user"></i> <span class="ms-1 d-none d-sm-inline">Perfil</span> </a>
                        
                    </li>
                    <li>
                        <a href="{{route('crear.post', $user->id)}}" class="nav-link px-0 align-middle">
                            <i class="fa-solid fa-pen-to-square"></i> <span class="ms-1 d-none d-sm-inline">publicar venta</span></a>
                    </li>
                    <li>
                        <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-0 align-middle ">
                            <i class="fa-solid fa-microchip"></i> <span class="ms-1 d-none d-sm-inline">Mercado</span></a>
                        <ul class="collapse nav flex-column ms-1" id="submenu2" data-bs-parent="#menu">
                           
                            
                        </ul>
                    </li>
                    <li>
                        <a href="#submenu3" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                            <i class="fa-solid fa-cart-shopping"></i> <span class="ms-1 d-none d-sm-inline">Productos</span> </a>
                            
                    </li>
                    <li>
                        <a href="#" class="nav-link px-0 align-middle">
                            <i class="fa-solid fa-person-through-window"></i> <span class="ms-1 d-none d-sm-inline">cerrar sesion</span> </a>
                    </li>
                </ul>
                <hr>
                <div >
                    <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="{{Storage::disk('s3')->url($user->userPhoto)}}" alt="hugenerd" width="80" height="80" class="rounded-circle">
                        
                        <span class="d-none d-sm-inline mx-1">{{$user->nombre}}</span>
                        
                    </a>
                    
                    <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                        <li><a class="dropdown-item" href="#">New project...</a></li>
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Sign out</a></li>
                    </ul>
                </div>
                
            </div>
        </div>
        
        <div id="card-bg">
            
       

@yield('contenido')


    
