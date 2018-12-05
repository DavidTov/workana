<!-- MENU IZQ, se incluirá en el layout_menu -->


<!-- NAVEGACIÓN -->


 <div class="default-sidebar">       

    <!-- Begin Side Navbar -->
    <nav class="side-navbar box-scroll sidebar-scroll">
        <!-- Begin Main Navigation -->
        <ul class="list-unstyled">
            <!-- DASHBOARD -->
            <li class="active"> <a href="index.php?action=dashboard"><i class="la la-columns"></i><span>Dashboard</span></a> </li>
        </ul>
        
        <ul class="list-unstyled"> <!-- USUARIOS -->
              <li><a href="#dropdown-app" aria-expanded="false" data-toggle="collapse"><i class="la la-user"></i>Usuarios</a>
                <ul id="dropdown-app" class="collapse list-unstyled pt-0">
                    <li><a href="index.php?action=listaDeUsuarios">Lista de usuarios</a></li>
                    <li><a href="index.php?action=agregarUsuario">Agregar usuario</a></li>
                </ul>
            </li>

            <!-- CUPONES -->
            <li><a href="index.php?action=listaDeCupones" ><i class="la la-ticket"></i><i class="la la-car"></i>
            <span>Cupones/Visitas</span></a>                
            </li>

          
              
    <!-- EN CADA UNO DE LOS href="" pones href="index.php?action=agregar_premio" por ejemplo
    agregar_premio va a ser un archivo .php (agregar_premio.php) QUE LO TENDRÁS QUE COLOCAR EN
    LA CARPETE pages. Y EN EL modelo2 lo agregas en el primer if.
    -->

    <!-- PREMIOS -->
        <li><a href="#dropdown-icons" aria-expanded="false" data-toggle="collapse"><i class="ti-gift"></i><span>Premios</span></a>
            <ul id="dropdown-icons" class="collapse list-unstyled pt-0">
                <li><a href="index.php?action=verPremios"">Ver Premios</a></li>
                <li><a href="index.php?action=registroPremios"">Registrar Premio</a></li>
            </ul>
        </li>

        <!-- PROMOCIONES -->
        <li><a href="#dropdown-forms" aria-expanded="false" data-toggle="collapse"><i class="la la-flag-checkered"></i><span>Promociones</span></a>
            <ul id="dropdown-forms" class="collapse list-unstyled pt-0">
                <li><a href="index.php?action=verPromociones">Ver Promociones</a></li>
                <li><a href="index.php?action=registroPromociones">Registro Promociones</a></li>
            </ul>
        </li>
       
        <!-- HORARIOS -->
        <li><a href="#dropdown-tables" aria-expanded="false" data-toggle="collapse"><i class="ion-clock"></i><span>Horarios</span></a>
            <ul id="dropdown-tables" class="collapse list-unstyled pt-0">
                <li><a href="index.php?action=verHorarios">Ver Horarios</a></li>
                <li><a href="index.php?action=registroHorarios">Registrar Horario</a></li>
            </ul>
        </li>
        
    </ul>
    <!--<span class="heading">Pages</span> -->
                              
        <!-- End Main Navigation -->
    </nav>
    <!-- End Side Navbar -->
</div>
<!-- End Left Sidebar -->
            

