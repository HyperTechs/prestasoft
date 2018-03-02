 <div class="sidebar-nav">
     <ul class="nav flex-column">
         <li class="nav-item">
             <a class="nav-link active" href="{{url('/dashboard')}}"><i class="icon-white fa fa-tachometer" aria-hidden="true"></i> Dashboard</a>
         </li>
         <li class="nav-item dropdown-list-menu">
             <a class="nav-link" href="#"><i class="icon-white fa fa-address-card-o" aria-hidden="true"></i> Clientes <i class="icon-direcction icon-white fa fa-caret-left float-right" aria-hidden="true"></i></a>
             <ul class="dropdown-list">
                 <li class="nav-item">
                     <a class="nav-link" href="{{url('/clients/create')}}"><i class="icon-white fa  fa-plus" aria-hidden="true"></i>Crear</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link" href="{{url('/clients/system')}}"><i class="icon-white fa fa-list" aria-hidden="true"></i> Lista</a>
                 </li>


             </ul>
         </li>
         <li class="nav-item  dropdown-list-menu">
             <a class="nav-link" href="#"><i class="icon-white fa fa-money" aria-hidden="true"></i> Prestamos <i class="icon-direcction icon-white fa fa-caret-left float-right" aria-hidden="true"></i></a>
             <ul class="dropdown-list">
                 <li class="nav-item">
                     <a class="nav-link" href="{{url('/payments/create')}}"><i class="icon-white fa fa-thumbs-o-up" aria-hidden="true"></i> Solicitar (P.O)</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link" href="#"><i class="icon-white fa fa-thumbs-o-up" aria-hidden="true"></i> Aprobados</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link" href="#"><i class="icon-white fa fa-credit-card-alt" aria-hidden="true"></i> Pagos</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link" href="#"><i class="icon-white fa fa-hand-paper-o" aria-hidden="true"></i> Pendientes</a>
                 </li>

             </ul>
         </li>
         <li class="nav-item">
             <a class="nav-link" href="#"><i class="icon-white fa fa-money" aria-hidden="true"></i> Contabilidad</a>
         </li>

     </ul>
 </div>
